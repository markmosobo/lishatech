<?php

namespace App\Http\Controllers;

use App\DataTables\AccessLevelDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateAccessLevelRequest;
use App\Http\Requests\UpdateAccessLevelRequest;
use App\Repositories\AccessLevelRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class AccessLevelController extends AppBaseController
{
    /** @var  AccessLevelRepository */
    private $accessLevelRepository;

    public function __construct(AccessLevelRepository $accessLevelRepo)
    {
        $this->accessLevelRepository = $accessLevelRepo;
    }

    /**
     * Display a listing of the AccessLevel.
     *
     * @param AccessLevelDataTable $accessLevelDataTable
     * @return Response
     */
    public function index(AccessLevelDataTable $accessLevelDataTable)
    {
        return $accessLevelDataTable->render('access_levels.index');
    }

    /**
     * Show the form for creating a new AccessLevel.
     *
     * @return Response
     */
    public function create()
    {
        return view('access_levels.create');
    }

    /**
     * Store a newly created AccessLevel in storage.
     *
     * @param CreateAccessLevelRequest $request
     *
     * @return Response
     */
    public function store(CreateAccessLevelRequest $request)
    {
        $input = $request->all();

        $accessLevel = $this->accessLevelRepository->create($input);

        Flash::success('Access Level saved successfully.');

        return redirect(route('accessLevels.index'));
    }

    /**
     * Display the specified AccessLevel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $accessLevel = $this->accessLevelRepository->findWithoutFail($id);

        if (empty($accessLevel)) {
            Flash::error('Access Level not found');

            return redirect(route('accessLevels.index'));
        }

        return view('access_levels.show')->with('accessLevel', $accessLevel);
    }

    /**
     * Show the form for editing the specified AccessLevel.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $accessLevel = $this->accessLevelRepository->findWithoutFail($id);

        if (empty($accessLevel)) {
            Flash::error('Access Level not found');

            return redirect(route('accessLevels.index'));
        }

        return view('access_levels.edit')->with('accessLevel', $accessLevel);
    }

    /**
     * Update the specified AccessLevel in storage.
     *
     * @param  int              $id
     * @param UpdateAccessLevelRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateAccessLevelRequest $request)
    {
        $accessLevel = $this->accessLevelRepository->findWithoutFail($id);

        if (empty($accessLevel)) {
            Flash::error('Access Level not found');

            return redirect(route('accessLevels.index'));
        }

        $accessLevel = $this->accessLevelRepository->update($request->all(), $id);

        Flash::success('Access Level updated successfully.');

        return redirect(route('accessLevels.index'));
    }

    /**
     * Remove the specified AccessLevel from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $accessLevel = $this->accessLevelRepository->findWithoutFail($id);

        if (empty($accessLevel)) {
            Flash::error('Access Level not found');

            return redirect(route('accessLevels.index'));
        }

        $this->accessLevelRepository->delete($id);

        Flash::success('Access Level deleted successfully.');

        return redirect(route('accessLevels.index'));
    }
}
