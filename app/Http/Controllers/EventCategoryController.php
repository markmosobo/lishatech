<?php

namespace App\Http\Controllers;

use App\DataTables\EventCategoryDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateEventCategoryRequest;
use App\Http\Requests\UpdateEventCategoryRequest;
use App\Repositories\EventCategoryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class EventCategoryController extends AppBaseController
{
    /** @var  EventCategoryRepository */
    private $eventCategoryRepository;

    public function __construct(EventCategoryRepository $eventCategoryRepo)
    {
        $this->middleware('auth');
        $this->eventCategoryRepository = $eventCategoryRepo;
    }

    /**
     * Display a listing of the EventCategory.
     *
     * @param EventCategoryDataTable $eventCategoryDataTable
     * @return Response
     */
    public function index(EventCategoryDataTable $eventCategoryDataTable)
    {
        return $eventCategoryDataTable->render('event_categories.index');
    }

    /**
     * Show the form for creating a new EventCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('event_categories.create');
    }

    /**
     * Store a newly created EventCategory in storage.
     *
     * @param CreateEventCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateEventCategoryRequest $request)
    {
        $input = $request->all();

        $eventCategory = $this->eventCategoryRepository->create($input);

        Flash::success('Event Category saved successfully.');

        return redirect(route('eventCategories.index'));
    }

    /**
     * Display the specified EventCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $eventCategory = $this->eventCategoryRepository->findWithoutFail($id);

        if (empty($eventCategory)) {
            Flash::error('Event Category not found');

            return redirect(route('eventCategories.index'));
        }

        return response()->json($eventCategory);
    }

    /**
     * Show the form for editing the specified EventCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $eventCategory = $this->eventCategoryRepository->findWithoutFail($id);

        if (empty($eventCategory)) {
            Flash::error('Event Category not found');

            return redirect(route('eventCategories.index'));
        }

        return view('event_categories.edit')->with('eventCategory', $eventCategory);
    }

    /**
     * Update the specified EventCategory in storage.
     *
     * @param  int              $id
     * @param UpdateEventCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateEventCategoryRequest $request)
    {
        $eventCategory = $this->eventCategoryRepository->findWithoutFail($id);

        if (empty($eventCategory)) {
            Flash::error('Event Category not found');

            return redirect(route('eventCategories.index'));
        }

        $eventCategory = $this->eventCategoryRepository->update($request->all(), $id);

        Flash::success('Event Category updated successfully.');

        return redirect(route('eventCategories.index'));
    }

    /**
     * Remove the specified EventCategory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $eventCategory = $this->eventCategoryRepository->findWithoutFail($id);

        if (empty($eventCategory)) {
            Flash::error('Event Category not found');

            return redirect(route('eventCategories.index'));
        }

        $this->eventCategoryRepository->delete($id);

        Flash::success('Event Category deleted successfully.');

        return redirect(route('eventCategories.index'));
    }
}
