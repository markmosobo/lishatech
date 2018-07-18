<?php

namespace App\Http\Controllers;

use App\DataTables\InfoBipDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateInfoBipRequest;
use App\Http\Requests\UpdateInfoBipRequest;
use App\Models\CustomerMessage;
use App\Models\InfoBip;
use App\Models\Tenant;
use App\Repositories\InfoBipRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use infobip\api\client\GetAccountBalance;
use infobip\api\configuration\BasicAuthConfiguration;
use Response;

class InfoBipController extends AppBaseController
{
    /** @var  InfoBipRepository */
    private $infoBipRepository;

    public function __construct(InfoBipRepository $infoBipRepo)
    {
//        $this->middleware('auth');
        $this->infoBipRepository = $infoBipRepo;
    }

    /**
     * Display a listing of the InfoBip.
     *
     * @param InfoBipDataTable $infoBipDataTable
     * @return Response
     */
    public function index(InfoBipDataTable $infoBipDataTable)
    {
        return $infoBipDataTable->render('info_bips.index',[
            'tenants'=>Tenant::all()
        ]);
    }


    public function store(CreateInfoBipRequest $request)
    {
        $input = $request->all();

        $infoBip = $this->infoBipRepository->create($input);

        Flash::success('Info Bip saved successfully.');

        return redirect(route('infoBips.index'));
    }


    public function show($id)
    {
        $infoBip = $this->infoBipRepository->findWithoutFail($id);

        if (empty($infoBip)) {
            Flash::error('Info Bip not found');

            return redirect(route('infoBips.index'));
        }

        return response()->json($infoBip);
    }


    public function update($id, UpdateInfoBipRequest $request)
    {
        $infoBip = $this->infoBipRepository->findWithoutFail($id);

        if (empty($infoBip)) {
            Flash::error('Info Bip not found');

            return redirect(route('infoBips.index'));
        }

        $infoBip = $this->infoBipRepository->update($request->all(), $id);

        Flash::success('Info Bip updated successfully.');

        return redirect(route('infoBips.index'));
    }


    public function destroy($id)
    {
        $infoBip = $this->infoBipRepository->findWithoutFail($id);

        if (empty($infoBip)) {
            Flash::error('Info Bip not found');

            return redirect(route('infoBips.index'));
        }

        $this->infoBipRepository->delete($id);

        Flash::success('Info Bip deleted successfully.');

        return redirect(route('infoBips.index'));
    }

    public function getBalance(){
        $tenant = InfoBip::where('tenant_id',Auth::user()->tenant_id)->first();

        $client = new GetAccountBalance(new BasicAuthConfiguration($tenant->username,$tenant->password));
        $response = $client->execute();
//
        return response()->json(number_format($response->getBalance(),2));
//        return response()->json($tenant);
    }

    public function infoBipCallback(Request $request){
        $input = $request->all();
        $result =$input['results'][0];
        $message = CustomerMessage::find($result['callbackData']);
        $message->status = $result['status']['groupName'];
        $message->smsCount = $result['smsCount'];
        $message->message_id = $result['messageId'];
        $message->save();
    }
}
