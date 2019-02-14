<?php

namespace App\Http\Controllers;

use App\DataTables\SermonSpeakerDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSermonSpeakerRequest;
use App\Http\Requests\UpdateSermonSpeakerRequest;
use App\Repositories\SermonSpeakerRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SermonSpeakerController extends AppBaseController
{
    /** @var  SermonSpeakerRepository */
    private $sermonSpeakerRepository;

    public function __construct(SermonSpeakerRepository $sermonSpeakerRepo)
    {
        $this->sermonSpeakerRepository = $sermonSpeakerRepo;
    }

    /**
     * Display a listing of the SermonSpeaker.
     *
     * @param SermonSpeakerDataTable $sermonSpeakerDataTable
     * @return Response
     */
    public function index(SermonSpeakerDataTable $sermonSpeakerDataTable)
    {
        return $sermonSpeakerDataTable->render('sermon_speakers.index');
    }

    /**
     * Show the form for creating a new SermonSpeaker.
     *
     * @return Response
     */
    public function create()
    {
        return view('sermon_speakers.create');
    }

    /**
     * Store a newly created SermonSpeaker in storage.
     *
     * @param CreateSermonSpeakerRequest $request
     *
     * @return Response
     */
    public function store(CreateSermonSpeakerRequest $request)
    {
        $input = $request->all();

        $sermonSpeaker = $this->sermonSpeakerRepository->create($input);

        Flash::success('Sermon Speaker saved successfully.');

        return redirect(route('sermonSpeakers.index'));
    }

    /**
     * Display the specified SermonSpeaker.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sermonSpeaker = $this->sermonSpeakerRepository->findWithoutFail($id);

        if (empty($sermonSpeaker)) {
            Flash::error('Sermon Speaker not found');

            return redirect(route('sermonSpeakers.index'));
        }

        return view('sermon_speakers.show')->with('sermonSpeaker', $sermonSpeaker);
    }

    /**
     * Show the form for editing the specified SermonSpeaker.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sermonSpeaker = $this->sermonSpeakerRepository->findWithoutFail($id);

        if (empty($sermonSpeaker)) {
            Flash::error('Sermon Speaker not found');

            return redirect(route('sermonSpeakers.index'));
        }

        return view('sermon_speakers.edit')->with('sermonSpeaker', $sermonSpeaker);
    }

    /**
     * Update the specified SermonSpeaker in storage.
     *
     * @param  int              $id
     * @param UpdateSermonSpeakerRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSermonSpeakerRequest $request)
    {
        $sermonSpeaker = $this->sermonSpeakerRepository->findWithoutFail($id);

        if (empty($sermonSpeaker)) {
            Flash::error('Sermon Speaker not found');

            return redirect(route('sermonSpeakers.index'));
        }

        $sermonSpeaker = $this->sermonSpeakerRepository->update($request->all(), $id);

        Flash::success('Sermon Speaker updated successfully.');

        return redirect(route('sermonSpeakers.index'));
    }

    /**
     * Remove the specified SermonSpeaker from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sermonSpeaker = $this->sermonSpeakerRepository->findWithoutFail($id);

        if (empty($sermonSpeaker)) {
            Flash::error('Sermon Speaker not found');

            return redirect(route('sermonSpeakers.index'));
        }

        $this->sermonSpeakerRepository->delete($id);

        Flash::success('Sermon Speaker deleted successfully.');

        return redirect(route('sermonSpeakers.index'));
    }
}
