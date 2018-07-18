<?php

namespace App\Http\Controllers;

use App\DataTables\MasterfileDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMasterfileRequest;
use App\Http\Requests\UpdateMasterfileRequest;
use App\Repositories\MasterfileRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MasterfileController extends AppBaseController
{
    /** @var  MasterfileRepository */
    private $masterfileRepository;

    public function __construct(MasterfileRepository $masterfileRepo)
    {
        $this->middleware('auth');
        $this->masterfileRepository = $masterfileRepo;
    }

    /**
     * Display a listing of the Masterfile.
     *
     * @param MasterfileDataTable $masterfileDataTable
     * @return Response
     */
    public function index(MasterfileDataTable $masterfileDataTable)
    {
        return $masterfileDataTable->render('masterfiles.index');
    }

    /**
     * Show the form for creating a new Masterfile.
     *
     * @return Response
     */
    public function create()
    {
        return view('masterfiles.create');
    }

    /**
     * Store a newly created Masterfile in storage.
     *
     * @param CreateMasterfileRequest $request
     *
     * @return Response
     */
    public function store(CreateMasterfileRequest $request)
    {
        $input = $request->all();

        $masterfile = $this->masterfileRepository->create($input);

        Flash::success('Masterfile saved successfully.');

        return redirect(route('masterfiles.index'));
    }

    /**
     * Display the specified Masterfile.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $masterfile = $this->masterfileRepository->findWithoutFail($id);

        if (empty($masterfile)) {
            Flash::error('Masterfile not found');

            return redirect(route('masterfiles.index'));
        }

        return view('masterfiles.show')->with('masterfile', $masterfile);
    }

    /**
     * Show the form for editing the specified Masterfile.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $masterfile = $this->masterfileRepository->findWithoutFail($id);

        if (empty($masterfile)) {
            Flash::error('Masterfile not found');

            return redirect(route('masterfiles.index'));
        }

        return view('masterfiles.edit')->with('masterfile', $masterfile);
    }

    /**
     * Update the specified Masterfile in storage.
     *
     * @param  int              $id
     * @param UpdateMasterfileRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMasterfileRequest $request)
    {
        $masterfile = $this->masterfileRepository->findWithoutFail($id);

        if (empty($masterfile)) {
            Flash::error('Masterfile not found');

            return redirect(route('masterfiles.index'));
        }

        $masterfile = $this->masterfileRepository->update($request->all(), $id);

        Flash::success('Masterfile updated successfully.');

        return redirect(route('masterfiles.index'));
    }

    /**
     * Remove the specified Masterfile from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $masterfile = $this->masterfileRepository->findWithoutFail($id);

        if (empty($masterfile)) {
            Flash::error('Masterfile not found');

            return redirect(route('masterfiles.index'));
        }

        $this->masterfileRepository->delete($id);

        Flash::success('Masterfile deleted successfully.');

        return redirect(route('masterfiles.index'));
    }
}
