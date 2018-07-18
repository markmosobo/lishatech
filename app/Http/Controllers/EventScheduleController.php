<?php

namespace App\Http\Controllers;

use App\DataTables\EventScheduleDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEventScheduleRequest;
use App\Http\Requests\UpdateEventScheduleRequest;
use App\Repositories\EventScheduleRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EventScheduleController extends AppBaseController
{
    /** @var  EventScheduleRepository */
    private $eventScheduleRepository;

    public function __construct(EventScheduleRepository $eventScheduleRepo)
    {
        $this->eventScheduleRepository = $eventScheduleRepo;
        $this->middleware('auth');
    }

    /**
     * Display a listing of the EventSchedule.
     *
     * @param EventScheduleDataTable $eventScheduleDataTable
     * @return Response
     */
    public function index($id)
    {
        $eventScheduleDataTable = new EventScheduleDataTable($id);
        return $eventScheduleDataTable->render('event_schedules.index',[
            'id'=>$id
        ]);
    }

    /**
     * Show the form for creating a new EventSchedule.
     *
     * @return Response
     */
    public function create()
    {
        return view('event_schedules.create');
    }

    /**
     * Store a newly created EventSchedule in storage.
     *
     * @param CreateEventScheduleRequest $request
     *
     * @return Response
     */
    public function store(CreateEventScheduleRequest $request)
    {

        $input = $request->all();

        $eventSchedule = $this->eventScheduleRepository->create($input);

        Flash::success('Event Schedule saved successfully.');

        return redirect('eSchedule/'.$request->event_id);
    }

    /**
     * Display the specified EventSchedule.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eventSchedule = $this->eventScheduleRepository->findWithoutFail($id);

        if (empty($eventSchedule)) {
            Flash::error('Event Schedule not found');

            return redirect(route('eventSchedules.index'));
        }

        return view('event_schedules.show')->with('eventSchedule', $eventSchedule);
    }

    /**
     * Show the form for editing the specified EventSchedule.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventSchedule = $this->eventScheduleRepository->findWithoutFail($id);

        if (empty($eventSchedule)) {
            Flash::error('Event Schedule not found');

            return redirect(route('eventSchedules.index'));
        }

        return view('event_schedules.edit')->with('eventSchedule', $eventSchedule);
    }

    /**
     * Update the specified EventSchedule in storage.
     *
     * @param  int              $id
     * @param UpdateEventScheduleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventScheduleRequest $request)
    {
        $eventSchedule = $this->eventScheduleRepository->findWithoutFail($id);

        if (empty($eventSchedule)) {
            Flash::error('Event Schedule not found');

            return redirect(route('eventSchedules.index'));
        }

        $eventSchedule = $this->eventScheduleRepository->update($request->all(), $id);

        Flash::success('Event Schedule updated successfully.');

        return redirect(route('eventSchedules.index'));
    }

    /**
     * Remove the specified EventSchedule from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eventSchedule = $this->eventScheduleRepository->findWithoutFail($id);

        if (empty($eventSchedule)) {
            Flash::error('Event Schedule not found');

            return redirect(route('eventSchedules.index'));
        }

        $this->eventScheduleRepository->delete($id);

        Flash::success('Event Schedule deleted successfully.');

        return redirect(route('eventSchedules.index'));
    }
}
