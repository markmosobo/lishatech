<?php

namespace App\Http\Controllers;

use App\DataTables\churchGroupMemberDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatechurchGroupMemberRequest;
use App\Http\Requests\UpdatechurchGroupMemberRequest;
use App\Repositories\churchGroupMemberRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class churchGroupMemberController extends AppBaseController
{
    /** @var  churchGroupMemberRepository */
    private $churchGroupMemberRepository;

    public function __construct(churchGroupMemberRepository $churchGroupMemberRepo)
    {
        $this->churchGroupMemberRepository = $churchGroupMemberRepo;
    }

    /**
     * Display a listing of the churchGroupMember.
     *
     * @param churchGroupMemberDataTable $churchGroupMemberDataTable
     * @return Response
     */
    public function index(churchGroupMemberDataTable $churchGroupMemberDataTable)
    {
        return $churchGroupMemberDataTable->render('church_group_members.index');
    }

    /**
     * Show the form for creating a new churchGroupMember.
     *
     * @return Response
     */
    public function create()
    {
        return view('church_group_members.create');
    }

    /**
     * Store a newly created churchGroupMember in storage.
     *
     * @param CreatechurchGroupMemberRequest $request
     *
     * @return Response
     */
    public function store(CreatechurchGroupMemberRequest $request)
    {
        $input = $request->all();

        $churchGroupMember = $this->churchGroupMemberRepository->create($input);

        Flash::success('Church Group Member saved successfully.');

        return redirect(route('churchGroupMembers.index'));
    }

    /**
     * Display the specified churchGroupMember.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $churchGroupMember = $this->churchGroupMemberRepository->findWithoutFail($id);

        if (empty($churchGroupMember)) {
            Flash::error('Church Group Member not found');

            return redirect(route('churchGroupMembers.index'));
        }

        return view('church_group_members.show')->with('churchGroupMember', $churchGroupMember);
    }

    /**
     * Show the form for editing the specified churchGroupMember.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $churchGroupMember = $this->churchGroupMemberRepository->findWithoutFail($id);

        if (empty($churchGroupMember)) {
            Flash::error('Church Group Member not found');

            return redirect(route('churchGroupMembers.index'));
        }

        return view('church_group_members.edit')->with('churchGroupMember', $churchGroupMember);
    }

    /**
     * Update the specified churchGroupMember in storage.
     *
     * @param  int              $id
     * @param UpdatechurchGroupMemberRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatechurchGroupMemberRequest $request)
    {
        $churchGroupMember = $this->churchGroupMemberRepository->findWithoutFail($id);

        if (empty($churchGroupMember)) {
            Flash::error('Church Group Member not found');

            return redirect(route('churchGroupMembers.index'));
        }

        $churchGroupMember = $this->churchGroupMemberRepository->update($request->all(), $id);

        Flash::success('Church Group Member updated successfully.');

        return redirect(route('churchGroupMembers.index'));
    }

    /**
     * Remove the specified churchGroupMember from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $churchGroupMember = $this->churchGroupMemberRepository->findWithoutFail($id);

        if (empty($churchGroupMember)) {
            Flash::error('Church Group Member not found');

            return redirect(route('churchGroupMembers.index'));
        }

        $this->churchGroupMemberRepository->delete($id);

        Flash::success('Church Group Member deleted successfully.');

        return redirect(route('churchGroupMembers.index'));
    }
}
