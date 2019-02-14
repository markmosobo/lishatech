<?php

namespace App\Http\Controllers;

use App\DataTables\SermonDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSermonRequest;
use App\Http\Requests\UpdateSermonRequest;
use App\Repositories\SermonRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SermonController extends AppBaseController
{
    /** @var  SermonRepository */
    private $sermonRepository;

    public function __construct(SermonRepository $sermonRepo)
    {
        $this->sermonRepository = $sermonRepo;
    }

    /**
     * Display a listing of the Sermon.
     *
     * @param SermonDataTable $sermonDataTable
     * @return Response
     */
    public function index(SermonDataTable $sermonDataTable)
    {
        return $sermonDataTable->render('sermons.index');
    }

    /**
     * Show the form for creating a new Sermon.
     *
     * @return Response
     */
    public function create()
    {
        return view('sermons.create');
    }

    /**
     * Store a newly created Sermon in storage.
     *
     * @param CreateSermonRequest $request
     *
     * @return Response
     */
    public function store(CreateSermonRequest $request)
    {
        $input = $request->all();

        $sermon = $this->sermonRepository->create($input);

        Flash::success('Sermon saved successfully.');

        return redirect(route('sermons.index'));
    }

    /**
     * Display the specified Sermon.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sermon = $this->sermonRepository->findWithoutFail($id);

        if (empty($sermon)) {
            Flash::error('Sermon not found');

            return redirect(route('sermons.index'));
        }

        return view('sermons.show')->with('sermon', $sermon);
    }

    /**
     * Show the form for editing the specified Sermon.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sermon = $this->sermonRepository->findWithoutFail($id);

        if (empty($sermon)) {
            Flash::error('Sermon not found');

            return redirect(route('sermons.index'));
        }

        return view('sermons.edit')->with('sermon', $sermon);
    }

    /**
     * Update the specified Sermon in storage.
     *
     * @param  int              $id
     * @param UpdateSermonRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSermonRequest $request)
    {
        $sermon = $this->sermonRepository->findWithoutFail($id);

        if (empty($sermon)) {
            Flash::error('Sermon not found');

            return redirect(route('sermons.index'));
        }

        $sermon = $this->sermonRepository->update($request->all(), $id);

        Flash::success('Sermon updated successfully.');

        return redirect(route('sermons.index'));
    }

    /**
     * Remove the specified Sermon from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sermon = $this->sermonRepository->findWithoutFail($id);

        if (empty($sermon)) {
            Flash::error('Sermon not found');

            return redirect(route('sermons.index'));
        }

        $this->sermonRepository->delete($id);

        Flash::success('Sermon deleted successfully.');

        return redirect(route('sermons.index'));
    }
}
