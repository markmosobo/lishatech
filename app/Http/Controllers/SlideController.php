<?php

namespace App\Http\Controllers;

use App\DataTables\SlideDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSlideRequest;
use App\Http\Requests\UpdateSlideRequest;
use App\Repositories\SlideRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SlideController extends AppBaseController
{
    /** @var  SlideRepository */
    private $slideRepository;

    public function __construct(SlideRepository $slideRepo)
    {
        $this->middleware('auth');
        $this->slideRepository = $slideRepo;
    }

    /**
     * Display a listing of the Slide.
     *
     * @param SlideDataTable $slideDataTable
     * @return Response
     */
    public function index(SlideDataTable $slideDataTable)
    {
        return $slideDataTable->render('slides.index');
    }

    /**
     * Show the form for creating a new Slide.
     *
     * @return Response
     */
    public function create()
    {
        return view('slides.create');
    }

    /**
     * Store a newly created Slide in storage.
     *
     * @param CreateSlideRequest $request
     *
     * @return Response
     */
    public function store(CreateSlideRequest $request)
    {
        $input = $request->all();

        if($request->hasFile('image')){
            $ext = $request->document_path->getClientOriginalExtension();
//            var_dump($ext)
//            $input['extension'] = $ext;
//            $input['size'] = $request->file('image')->getClientSize();
            $input['image'] = $request->file('image')->getClientOriginalName();
            $path = $request->file('image')->store();
            $input['document_path'] = asset('storage/'.$path);
        }

        $slide = $this->slideRepository->create($input);

        Flash::success('Slide saved successfully.');

        return redirect(route('slides.index'));
    }

    /**
     * Display the specified Slide.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $slide = $this->slideRepository->findWithoutFail($id);

        if (empty($slide)) {
            Flash::error('Slide not found');

            return redirect(route('slides.index'));
        }

        return view('slides.show')->with('slide', $slide);
    }

    /**
     * Show the form for editing the specified Slide.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $slide = $this->slideRepository->findWithoutFail($id);

        if (empty($slide)) {
            Flash::error('Slide not found');

            return redirect(route('slides.index'));
        }

        return view('slides.edit')->with('slide', $slide);
    }

    /**
     * Update the specified Slide in storage.
     *
     * @param  int              $id
     * @param UpdateSlideRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSlideRequest $request)
    {
        $slide = $this->slideRepository->findWithoutFail($id);

        if (empty($slide)) {
            Flash::error('Slide not found');

            return redirect(route('slides.index'));
        }

        $slide = $this->slideRepository->update($request->all(), $id);

        Flash::success('Slide updated successfully.');

        return redirect(route('slides.index'));
    }

    /**
     * Remove the specified Slide from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $slide = $this->slideRepository->findWithoutFail($id);

        if (empty($slide)) {
            Flash::error('Slide not found');

            return redirect(route('slides.index'));
        }

        $this->slideRepository->delete($id);

        Flash::success('Slide deleted successfully.');

        return redirect(route('slides.index'));
    }
}
