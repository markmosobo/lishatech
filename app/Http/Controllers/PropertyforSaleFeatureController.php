<?php

namespace App\Http\Controllers;

use App\DataTables\PropertyforSaleFeatureDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePropertyforSaleFeatureRequest;
use App\Http\Requests\UpdatePropertyforSaleFeatureRequest;
use App\Models\PropertyforSale;
use App\Repositories\PropertyforSaleFeatureRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PropertyforSaleFeatureController extends AppBaseController
{
    /** @var  PropertyforSaleFeatureRepository */
    private $propertyforSaleFeatureRepository;

    public function __construct(PropertyforSaleFeatureRepository $propertyforSaleFeatureRepo)
    {
        $this->propertyforSaleFeatureRepository = $propertyforSaleFeatureRepo;
    }

    /**
     * Display a listing of the PropertyforSaleFeature.
     *
     * @param PropertyforSaleFeatureDataTable $propertyforSaleFeatureDataTable
     * @return Response
     */
    public function index(PropertyforSaleFeatureDataTable $propertyforSaleFeatureDataTable)
    {
        return $propertyforSaleFeatureDataTable->render('propertyfor_sale_features.index',['properties'=>PropertyforSale::all()]);
    }

    /**
     * Show the form for creating a new PropertyforSaleFeature.
     *
     * @return Response
     */
    public function create()
    {
        return view('propertyfor_sale_features.create');
    }

    /**
     * Store a newly created PropertyforSaleFeature in storage.
     *
     * @param CreatePropertyforSaleFeatureRequest $request
     *
     * @return Response
     */
    public function store(CreatePropertyforSaleFeatureRequest $request)
    {
        $input = $request->all();

        $propertyforSaleFeature = $this->propertyforSaleFeatureRepository->create($input);

        Flash::success('Propertyfor Sale Feature saved successfully.');

        return redirect(route('propertyforSaleFeatures.index'));
    }

    /**
     * Display the specified PropertyforSaleFeature.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propertyforSaleFeature = $this->propertyforSaleFeatureRepository->findWithoutFail($id);

        if (empty($propertyforSaleFeature)) {
            Flash::error('Propertyfor Sale Feature not found');

            return redirect(route('propertyforSaleFeatures.index'));
        }

        return view('propertyfor_sale_features.show')->with('propertyforSaleFeature', $propertyforSaleFeature);
    }

    /**
     * Show the form for editing the specified PropertyforSaleFeature.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propertyforSaleFeature = $this->propertyforSaleFeatureRepository->findWithoutFail($id);

        if (empty($propertyforSaleFeature)) {
            Flash::error('Propertyfor Sale Feature not found');

            return redirect(route('propertyforSaleFeatures.index'));
        }

        return view('propertyfor_sale_features.edit')->with('propertyforSaleFeature', $propertyforSaleFeature);
    }

    /**
     * Update the specified PropertyforSaleFeature in storage.
     *
     * @param  int              $id
     * @param UpdatePropertyforSaleFeatureRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropertyforSaleFeatureRequest $request)
    {
        $propertyforSaleFeature = $this->propertyforSaleFeatureRepository->findWithoutFail($id);

        if (empty($propertyforSaleFeature)) {
            Flash::error('Propertyfor Sale Feature not found');

            return redirect(route('propertyforSaleFeatures.index'));
        }

        $propertyforSaleFeature = $this->propertyforSaleFeatureRepository->update($request->all(), $id);

        Flash::success('Propertyfor Sale Feature updated successfully.');

        return redirect(route('propertyforSaleFeatures.index'));
    }

    /**
     * Remove the specified PropertyforSaleFeature from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propertyforSaleFeature = $this->propertyforSaleFeatureRepository->findWithoutFail($id);

        if (empty($propertyforSaleFeature)) {
            Flash::error('Propertyfor Sale Feature not found');

            return redirect(route('propertyforSaleFeatures.index'));
        }

        $this->propertyforSaleFeatureRepository->delete($id);

        Flash::success('Propertyfor Sale Feature deleted successfully.');

        return redirect(route('propertyforSaleFeatures.index'));
    }
}
