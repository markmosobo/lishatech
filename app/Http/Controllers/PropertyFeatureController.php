<?php

namespace App\Http\Controllers;

use App\DataTables\PropertyFeatureDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePropertyFeatureRequest;
use App\Http\Requests\UpdatePropertyFeatureRequest;
use App\Models\Property;
use App\Repositories\PropertyFeatureRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PropertyFeatureController extends AppBaseController
{
    /** @var  PropertyFeatureRepository */
    private $propertyFeatureRepository;

    public function __construct(PropertyFeatureRepository $propertyFeatureRepo)
    {
        $this->propertyFeatureRepository = $propertyFeatureRepo;
    }

    /**
     * Display a listing of the PropertyFeature.
     *
     * @param PropertyFeatureDataTable $propertyFeatureDataTable
     * @return Response
     */
    public function index(PropertyFeatureDataTable $propertyFeatureDataTable)
    {
        return $propertyFeatureDataTable->render('property_features.index',['properties'=>Property::all()]);
    }

    /**
     * Show the form for creating a new PropertyFeature.
     *
     * @return Response
     */
    public function create()
    {
        return view('property_features.create');
    }

    /**
     * Store a newly created PropertyFeature in storage.
     *
     * @param CreatePropertyFeatureRequest $request
     *
     * @return Response
     */
    public function store(CreatePropertyFeatureRequest $request)
    {
        $input = $request->all();

        $propertyFeature = $this->propertyFeatureRepository->create($input);

        Flash::success('Property Feature saved successfully.');

        return redirect(route('propertyFeatures.index'));
    }

    /**
     * Display the specified PropertyFeature.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propertyFeature = $this->propertyFeatureRepository->findWithoutFail($id);

        if (empty($propertyFeature)) {
            Flash::error('Property Feature not found');

            return redirect(route('propertyFeatures.index'));
        }

//        return view('property_features.show')->with('propertyFeature', $propertyFeature);
        return redirect(route('propertyFeatures.index'));

    }

    /**
     * Show the form for editing the specified PropertyFeature.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propertyFeature = $this->propertyFeatureRepository->findWithoutFail($id);

        if (empty($propertyFeature)) {
            Flash::error('Property Feature not found');

            return redirect(route('propertyFeatures.index'));
        }

        return view('property_features.edit')->with('propertyFeature', $propertyFeature);
    }

    /**
     * Update the specified PropertyFeature in storage.
     *
     * @param  int              $id
     * @param UpdatePropertyFeatureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropertyFeatureRequest $request)
    {
        $propertyFeature = $this->propertyFeatureRepository->findWithoutFail($id);

        if (empty($propertyFeature)) {
            Flash::error('Property Feature not found');

            return redirect(route('propertyFeatures.index'));
        }

        $propertyFeature = $this->propertyFeatureRepository->update($request->all(), $id);

        Flash::success('Property Feature updated successfully.');

        return redirect(route('propertyFeatures.index'));
    }

    /**
     * Remove the specified PropertyFeature from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propertyFeature = $this->propertyFeatureRepository->findWithoutFail($id);

        if (empty($propertyFeature)) {
            Flash::error('Property Feature not found');

            return redirect(route('propertyFeatures.index'));
        }

        $this->propertyFeatureRepository->delete($id);

        Flash::success('Property Feature deleted successfully.');

        return redirect(route('propertyFeatures.index'));
    }
}
