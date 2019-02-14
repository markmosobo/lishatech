<?php

namespace App\Http\Controllers;

use App\DataTables\MembersDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateMembersRequest;
use App\Http\Requests\UpdateMembersRequest;
use App\Repositories\MembersRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class MembersController extends AppBaseController
{
    /** @var  MembersRepository */
    private $membersRepository;

    public function __construct(MembersRepository $membersRepo)
    {
        $this->membersRepository = $membersRepo;
    }

    /**
     * Display a listing of the Members.
     *
     * @param MembersDataTable $membersDataTable
     * @return Response
     */
    public function index(MembersDataTable $membersDataTable)
    {
        return $membersDataTable->render('members.index');
    }

    /**
     * Show the form for creating a new Members.
     *
     * @return Response
     */
    public function create()
    {
        return view('members.create');
    }

    /**
     * Store a newly created Members in storage.
     *
     * @param CreateMembersRequest $request
     *
     * @return Response
     */
    public function store(CreateMembersRequest $request)
    {
        $input = $request->all();

        $members = $this->membersRepository->create($input);

        Flash::success('Members saved successfully.');

        return redirect(route('members.index'));
    }

    /**
     * Display the specified Members.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $members = $this->membersRepository->findWithoutFail($id);

        if (empty($members)) {
            Flash::error('Members not found');

            return redirect(route('members.index'));
        }

        return view('members.show')->with('members', $members);
    }

    /**
     * Show the form for editing the specified Members.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $members = $this->membersRepository->findWithoutFail($id);

        if (empty($members)) {
            Flash::error('Members not found');

            return redirect(route('members.index'));
        }

        return view('members.edit')->with('members', $members);
    }

    /**
     * Update the specified Members in storage.
     *
     * @param  int              $id
     * @param UpdateMembersRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateMembersRequest $request)
    {
        $members = $this->membersRepository->findWithoutFail($id);

        if (empty($members)) {
            Flash::error('Members not found');

            return redirect(route('members.index'));
        }

        $members = $this->membersRepository->update($request->all(), $id);

        Flash::success('Members updated successfully.');

        return redirect(route('members.index'));
    }

    /**
     * Remove the specified Members from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $members = $this->membersRepository->findWithoutFail($id);

        if (empty($members)) {
            Flash::error('Members not found');

            return redirect(route('members.index'));
        }

        $this->membersRepository->delete($id);

        Flash::success('Members deleted successfully.');

        return redirect(route('members.index'));
    }
}
