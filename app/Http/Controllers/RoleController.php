<?php

namespace App\Http\Controllers;

use App\DataTables\RoleDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateRoleRequest;
use App\Http\Requests\UpdateRoleRequest;
use App\Models\AccessLevel;
use App\Models\RoleRoute;
use App\Models\Route;
use App\Repositories\RoleRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Database\QueryException;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Response;
use Yajra\DataTables\Facades\DataTables;
use Yajra\DataTables\Services\DataTable;

class RoleController extends AppBaseController
{
    /** @var  RoleRepository */
    private $roleRepository;

    public function __construct(RoleRepository $roleRepo)
    {
        $this->roleRepository = $roleRepo;
        $this->middleware('auth');
//        $this->middleware('validate_routes');
    }

    /**
     * Display a listing of the Role.
     *
     * @param RoleDataTable $roleDataTable
     * @return Response
     */
    public function index(RoleDataTable $roleDataTable)
    {
        return $roleDataTable->render('roles.index',[
            'accessLevels'=>AccessLevel::all()
        ]);
    }

    /**
     * Show the form for creating a new Role.
     *
     * @return Response
     */
    public function create()
    {
        return view('roles.create');
    }

    /**
     * Store a newly created Role in storage.
     *
     * @param CreateRoleRequest $request
     *
     * @return Response
     */
    public function store(CreateRoleRequest $request)
    {
        $input = $request->all();
        $input['created_by'] = Auth::id();
        $input["tenant_id"] = Auth::user()->tenant_id;
        $role = $this->roleRepository->create($input);

        Flash::success('Role saved successfully.');

        return redirect(route('roles.index'));
    }

    /**
     * Display the specified Role.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $role = $this->roleRepository->findWithoutFail($id);

//        if (empty($role)) {
//            Flash::error('Role not found');
//
//            return redirect(route('roles.index'));
//        }
//
//        return view('roles.show')->with('role', $role);
        return response()->json($role);
    }

    /**
     * Show the form for editing the specified Role.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $role = $this->roleRepository->findWithoutFail($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('roles.index'));
        }

        return view('roles.edit')->with('role', $role);
    }

    /**
     * Update the specified Role in storage.
     *
     * @param  int              $id
     * @param UpdateRoleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateRoleRequest $request)
    {
        $role = $this->roleRepository->findWithoutFail($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('roles.index'));
        }

        $role = $this->roleRepository->update($request->all(), $id);

        Flash::success('Role updated successfully.');

        return redirect(route('roles.index'));
    }

    /**
     * Remove the specified Role from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $role = $this->roleRepository->findWithoutFail($id);

        if (empty($role)) {
            Flash::error('Role not found');

            return redirect(route('roles.index'));
        }

        $this->roleRepository->delete($id);

        Flash::success('Role deleted successfully.');

        return redirect(route('roles.index'));
    }

    public function getRoutes($id = null){
        if(LoggedUserController::isSystemAdmin()){
            $routes = Route::where('parent_route','<>','null')->get();
            $all_routes = RoleRoute::where('role_id',$id)->pluck('route_id')->toArray();
        }else{
            $authorizedRoutes = RoleRoute::where('role_id',Auth::user()->role_id)->pluck('route_id')->toArray();
            $routes = Route::where('parent_route','<>','null')
                ->whereIn('id',$authorizedRoutes)
                ->get();
            $all_routes = RoleRoute::where('role_id',$id)->pluck('route_id')->toArray();
        }




        $dataTab = DataTables::of($routes)
            ->editColumn('id',function ($route) use($all_routes){

                if(in_array($route->id,$all_routes)){
                    $checked = '<input type="checkbox" class="i-check menu-permission" value='.$route->id.' checked>';
                }else{
                    $checked =  '<input type="checkbox" class="i-check menu-permission" value='.$route->id.' >';
                }
                return $checked;
            })
            ->rawColumns(['id'])
            ->make(true);
        return $dataTab;
    }
    public function assignPermissions(\Illuminate\Http\Request $request){
        $status = [];
        if($request->action == 'allocate'){
            $role = new RoleRoute();
            $role->role_id = $request->role_id;
            $role->route_id = $request->route_id;
            try{
                $role->save();
                $status['status'] = ["state"=>"success","message"=>"Permission has been granted"];
            }catch (QueryException $exception){
                $status['status'] = "failed";
            }

        }else{
            try{
                $role = DB::table("role_route")->where([
                    ['role_id','=', $request->role_id],
                    ['route_id','=', $request->route_id],
                ])->delete();
                $status['status'] = ["state"=>"success","message"=>"Permission has been removed"];
            }catch (QueryException $exception){
                $status['status'] = "failed";
            }
        }
        return response()->json($status);
    }
}
