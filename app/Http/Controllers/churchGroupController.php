<?php

namespace App\Http\Controllers;

use App\DataTables\churchGroupDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatechurchGroupRequest;
use App\Http\Requests\UpdatechurchGroupRequest;
use App\Repositories\churchGroupRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class churchGroupController extends AppBaseController
{
    /** @var  churchGroupRepository */
    private $churchGroupRepository;

    public function __construct(churchGroupRepository $churchGroupRepo)
    {
        $this->churchGroupRepository = $churchGroupRepo;
    }

    /**
     * Display a listing of the churchGroup.
     *
     * @param churchGroupDataTable $churchGroupDataTable
     * @return Response
     */
    public function index(churchGroupDataTable $churchGroupDataTable)
    {
        return $churchGroupDataTable->render('church_groups.index');
    }

    /**
     * Show the form for creating a new churchGroup.
     *
     * @return Response
     */
    public function create()
    {
        return view('church_groups.create');
    }

    /**
     * Store a newly created churchGroup in storage.
     *
     * @param CreatechurchGroupRequest $request
     *
     * @return Response
     */
    public function store(CreatechurchGroupRequest $request)
    {
        $input = $request->all();

        $churchGroup = $this->churchGroupRepository->create($input);

        Flash::success('Church Group saved successfully.');

        return redirect(route('churchGroups.index'));
    }

    /**
     * Display the specified churchGroup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $churchGroup = $this->churchGroupRepository->findWithoutFail($id);

        if (empty($churchGroup)) {
            Flash::error('Church Group not found');

            return redirect(route('churchGroups.index'));
        }

        return view('church_groups.show')->with('churchGroup', $churchGroup);
    }

    /**
     * Show the form for editing the specified churchGroup.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $churchGroup = $this->churchGroupRepository->findWithoutFail($id);

        if (empty($churchGroup)) {
            Flash::error('Church Group not found');

            return redirect(route('churchGroups.index'));
        }

        return view('church_groups.edit')->with('churchGroup', $churchGroup);
    }

    /**
     * Update the specified churchGroup in storage.
     *
     * @param  int              $id
     * @param UpdatechurchGroupRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatechurchGroupRequest $request)
    {
        $churchGroup = $this->churchGroupRepository->findWithoutFail($id);

        if (empty($churchGroup)) {
            Flash::error('Church Group not found');

            return redirect(route('churchGroups.index'));
        }

        $churchGroup = $this->churchGroupRepository->update($request->all(), $id);

        Flash::success('Church Group updated successfully.');

        return redirect(route('churchGroups.index'));
    }

    /**
     * Remove the specified churchGroup from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $churchGroup = $this->churchGroupRepository->findWithoutFail($id);

        if (empty($churchGroup)) {
            Flash::error('Church Group not found');

            return redirect(route('churchGroups.index'));
        }

        $this->churchGroupRepository->delete($id);

        Flash::success('Church Group deleted successfully.');

        return redirect(route('churchGroups.index'));
    }
}
