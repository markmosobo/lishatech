<?php

namespace App\Http\Controllers;

use App\DataTables\PropertySaleDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePropertySaleRequest;
use App\Http\Requests\UpdatePropertySaleRequest;
use App\Repositories\PropertySaleRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PropertySaleController extends AppBaseController
{
    /** @var  PropertySaleRepository */
    private $propertySaleRepository;

    public function __construct(PropertySaleRepository $propertySaleRepo)
    {
        $this->propertySaleRepository = $propertySaleRepo;
    }

    /**
     * Display a listing of the PropertySale.
     *
     * @param PropertySaleDataTable $propertySaleDataTable
     * @return Response
     */
    public function index(PropertySaleDataTable $propertySaleDataTable)
    {
        return $propertySaleDataTable->render('property_sales.index');
    }

    /**
     * Show the form for creating a new PropertySale.
     *
     * @return Response
     */
    public function create()
    {
        return view('property_sales.create');
    }

    /**
     * Store a newly created PropertySale in storage.
     *
     * @param CreatePropertySaleRequest $request
     *
     * @return Response
     */
    public function store(CreatePropertySaleRequest $request)
    {
        $input = $request->all();

        $propertySale = $this->propertySaleRepository->create($input);

        Flash::success('Property Sale saved successfully.');

        return redirect(route('propertySales.index'));
    }

    /**
     * Display the specified PropertySale.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propertySale = $this->propertySaleRepository->findWithoutFail($id);

        if (empty($propertySale)) {
            Flash::error('Property Sale not found');

            return redirect(route('propertySales.index'));
        }

        return view('property_sales.show')->with('propertySale', $propertySale);
    }

    /**
     * Show the form for editing the specified PropertySale.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propertySale = $this->propertySaleRepository->findWithoutFail($id);

        if (empty($propertySale)) {
            Flash::error('Property Sale not found');

            return redirect(route('propertySales.index'));
        }

        return view('property_sales.edit')->with('propertySale', $propertySale);
    }

    /**
     * Update the specified PropertySale in storage.
     *
     * @param  int              $id
     * @param UpdatePropertySaleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropertySaleRequest $request)
    {
        $propertySale = $this->propertySaleRepository->findWithoutFail($id);

        if (empty($propertySale)) {
            Flash::error('Property Sale not found');

            return redirect(route('propertySales.index'));
        }

        $propertySale = $this->propertySaleRepository->update($request->all(), $id);

        Flash::success('Property Sale updated successfully.');

        return redirect(route('propertySales.index'));
    }

    /**
     * Remove the specified PropertySale from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propertySale = $this->propertySaleRepository->findWithoutFail($id);

        if (empty($propertySale)) {
            Flash::error('Property Sale not found');

            return redirect(route('propertySales.index'));
        }

        $this->propertySaleRepository->delete($id);

        Flash::success('Property Sale deleted successfully.');

        return redirect(route('propertySales.index'));
    }
}
