<?php

namespace App\Http\Controllers;

use App\DataTables\TenantDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateTenantRequest;
use App\Http\Requests\UpdateTenantRequest;
use App\Models\Account;
use App\Models\Masterfile;
use App\Models\Notification;
use App\Models\Role;
use App\Models\User;
use App\Repositories\TenantRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;

class TenantController extends AppBaseController
{
    /** @var  TenantRepository */
    private $tenantRepository;
    const core_admin = 'ADMIN';

    public function __construct(TenantRepository $tenantRepo)
    {
        $this->tenantRepository = $tenantRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the Tenant.
     *
     * @param TenantDataTable $tenantDataTable
     * @return Response
     */
    public function index(TenantDataTable $tenantDataTable)
    {
        return $tenantDataTable->render('tenants.index',[
            'roles'=>Role::all()
        ]);
    }

    /**
     * Show the form for creating a new Tenant.
     *
     * @return Response
     */
    public function create()
    {
        return view('tenants.create');
    }

    /**
     * Store a newly created Tenant in storage.
     *
     * @param CreateTenantRequest $request
     *
     * @return Response
     */
    public function store(CreateTenantRequest $request)
    {
        $input = $request->all();
        $status = DB::transaction(function()use($input,$request){
            $tenant = $this->tenantRepository->create($input);

            $mf = Masterfile::create([
                'full_name'=> $request->contact_person,
                'national_id' => $request->national_id,
                'email'=>$tenant->email,
                'phone_number'=>$request->phone_number,
                'created_by'=>Auth::id(),
                'tenant_id'=>$tenant->id,
                'gender'=>$request->gender,
            ]);

            $moneyAccount = Account::create([
                'account_number'=>$mf->national_id,
                'mf_id'=> $mf->id,
                'isMaster'=>true,
                'tenant_id'=>$tenant->id,
                'created_by' =>Auth::id()
            ]);

            $userAccount = User::create([
                'mf_id'=> $mf->id,
                'name'=> $mf->full_name,
                'email'=> $mf->email,
                'password'=> bcrypt(123456),
                'role_id'=> Role::where('name',self::core_admin)->first()->id,
                'tenant_id'=> $tenant->id,
                'created_by'=> Auth::id(),
                'password_changed'=>false,
                'email_confirmed'=>false,
                'status'=>true
            ]);

            $loanApprovalNotification = Notification::create([
                'code'=>loan_approval_notification,
                'event'=>'Loan Approval',
                'message'=>'Dear @customer, your loan of @loan has been approved. Your first repayment of @first_repayment is due on @due. Go to mpesa paybills and enter @paybill and use your id number as your account number.',
                'tenant_id'=>$tenant->id
            ]);
                return true;
        });

        Flash::success('Tenant saved successfully.');
//        dd($status);

        return redirect(route('tenants.index'));
    }

    /**
     * Display the specified Tenant.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tenant = $this->tenantRepository->findWithoutFail($id);

        if (empty($tenant)) {
            Flash::error('Tenant not found');

            return redirect(route('tenants.index'));
        }

        return response()->json($tenant);
    }

    /**
     * Show the form for editing the specified Tenant.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tenant = $this->tenantRepository->findWithoutFail($id);

        if (empty($tenant)) {
            Flash::error('Tenant not found');

            return redirect(route('tenants.index'));
        }

        return view('tenants.edit')->with('tenant', $tenant);
    }

    /**
     * Update the specified Tenant in storage.
     *
     * @param  int              $id
     * @param UpdateTenantRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateTenantRequest $request)
    {
        $tenant = $this->tenantRepository->findWithoutFail($id);

        if (empty($tenant)) {
            Flash::error('Tenant not found');

            return redirect(route('tenants.index'));
        }

        $tenant = $this->tenantRepository->update($request->all(), $id);

        Flash::success('Tenant updated successfully.');

        return redirect(route('tenants.index'));
    }

    /**
     * Remove the specified Tenant from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tenant = $this->tenantRepository->findWithoutFail($id);

        if (empty($tenant)) {
            Flash::error('Tenant not found');

            return redirect(route('tenants.index'));
        }

        $this->tenantRepository->delete($id);

        Flash::success('Tenant deleted successfully.');

        return redirect(route('tenants.index'));
    }
}
