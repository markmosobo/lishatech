<?php

namespace App\Http\Controllers;

use App\DataTables\PropertytoRentFeatureDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePropertytoRentFeatureRequest;
use App\Http\Requests\UpdatePropertytoRentFeatureRequest;
use App\Models\PropertytoRent;
use App\Repositories\PropertytoRentFeatureRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PropertytoRentFeatureController extends AppBaseController
{
    /** @var  PropertytoRentFeatureRepository */
    private $propertytoRentFeatureRepository;

    public function __construct(PropertytoRentFeatureRepository $propertytoRentFeatureRepo)
    {
        $this->propertytoRentFeatureRepository = $propertytoRentFeatureRepo;
    }

    /**
     * Display a listing of the PropertytoRentFeature.
     *
     * @param PropertytoRentFeatureDataTable $propertytoRentFeatureDataTable
     * @return Response
     */
    public function index(PropertytoRentFeatureDataTable $propertytoRentFeatureDataTable)
    {
        return $propertytoRentFeatureDataTable->render('propertyto_rent_features.index',['properties'=>PropertytoRent::all()]);
    }

    /**
     * Show the form for creating a new PropertytoRentFeature.
     *
     * @return Response
     */
    public function create()
    {
        return view('propertyto_rent_features.create');
    }

    /**
     * Store a newly created PropertytoRentFeature in storage.
     *
     * @param CreatePropertytoRentFeatureRequest $request
     *
     * @return Response
     */
    public function store(CreatePropertytoRentFeatureRequest $request)
    {
        $input = $request->all();

        $propertytoRentFeature = $this->propertytoRentFeatureRepository->create($input);

        Flash::success('Propertyto Rent Feature saved successfully.');

        return redirect(route('propertytoRentFeatures.index'));
    }

    /**
     * Display the specified PropertytoRentFeature.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propertytoRentFeature = $this->propertytoRentFeatureRepository->findWithoutFail($id);

        if (empty($propertytoRentFeature)) {
            Flash::error('Propertyto Rent Feature not found');

            return redirect(route('propertytoRentFeatures.index'));
        }

        return view('propertyto_rent_features.show')->with('propertytoRentFeature', $propertytoRentFeature);
    }

    /**
     * Show the form for editing the specified PropertytoRentFeature.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propertytoRentFeature = $this->propertytoRentFeatureRepository->findWithoutFail($id);

        if (empty($propertytoRentFeature)) {
            Flash::error('Propertyto Rent Feature not found');

            return redirect(route('propertytoRentFeatures.index'));
        }

        return view('propertyto_rent_features.edit')->with('propertytoRentFeature', $propertytoRentFeature);
    }

    /**
     * Update the specified PropertytoRentFeature in storage.
     *
     * @param  int              $id
     * @param UpdatePropertytoRentFeatureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropertytoRentFeatureRequest $request)
    {
        $propertytoRentFeature = $this->propertytoRentFeatureRepository->findWithoutFail($id);

        if (empty($propertytoRentFeature)) {
            Flash::error('Propertyto Rent Feature not found');

            return redirect(route('propertytoRentFeatures.index'));
        }

        $propertytoRentFeature = $this->propertytoRentFeatureRepository->update($request->all(), $id);

        Flash::success('Propertyto Rent Feature updated successfully.');

        return redirect(route('propertytoRentFeatures.index'));
    }

    /**
     * Remove the specified PropertytoRentFeature from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propertytoRentFeature = $this->propertytoRentFeatureRepository->findWithoutFail($id);

        if (empty($propertytoRentFeature)) {
            Flash::error('Propertyto Rent Feature not found');

            return redirect(route('propertytoRentFeatures.index'));
        }

        $this->propertytoRentFeatureRepository->delete($id);

        Flash::success('Propertyto Rent Feature deleted successfully.');

        return redirect(route('propertytoRentFeatures.index'));
    }
}
