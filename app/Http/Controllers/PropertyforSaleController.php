<?php

namespace App\Http\Controllers;

use App\DataTables\PropertyforSaleDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePropertyforSaleRequest;
use App\Http\Requests\UpdatePropertyforSaleRequest;
use App\Repositories\PropertyforSaleRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PropertyforSaleController extends AppBaseController
{
    /** @var  PropertyforSaleRepository */
    private $propertyforSaleRepository;

    public function __construct(PropertyforSaleRepository $propertyforSaleRepo)
    {
        $this->propertyforSaleRepository = $propertyforSaleRepo;
    }

    /**
     * Display a listing of the PropertyforSale.
     *
     * @param PropertyforSaleDataTable $propertyforSaleDataTable
     * @return Response
     */
    public function index(PropertyforSaleDataTable $propertyforSaleDataTable)
    {
        return $propertyforSaleDataTable->render('propertyfor_sales.index');
    }

    /**
     * Show the form for creating a new PropertyforSale.
     *
     * @return Response
     */
    public function create()
    {
        return view('propertyfor_sales.create');
    }

    /**
     * Store a newly created PropertyforSale in storage.
     *
     * @param CreatePropertyforSaleRequest $request
     *
     * @return Response
     */
    public function store(CreatePropertyforSaleRequest $request)
    {
        $input = $request->all();

        if($request->hasFile('image')) {
            $image = $request->file('image');
//            echo 'yes';die;
            $input['image_path'] = $request->file('image')->store('uploads');
        }

        $propertyforSale = $this->propertyforSaleRepository->create($input);

        Flash::success('Propertyfor Sale saved successfully.');

        return redirect(route('propertyforSales.index'));
    }

    /**
     * Display the specified PropertyforSale.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propertyforSale = $this->propertyforSaleRepository->findWithoutFail($id);

        if (empty($propertyforSale)) {
            Flash::error('Propertyfor Sale not found');

            return redirect(route('propertyforSales.index'));
        }

        return response()->json($propertyforSale);
    }

    /**
     * Show the form for editing the specified PropertyforSale.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propertyforSale = $this->propertyforSaleRepository->findWithoutFail($id);

        if (empty($propertyforSale)) {
            Flash::error('Propertyfor Sale not found');

            return redirect(route('propertyforSales.index'));
        }

        return view('propertyfor_sales.edit')->with('propertyforSale', $propertyforSale);
    }

    /**
     * Update the specified PropertyforSale in storage.
     *
     * @param  int              $id
     * @param UpdatePropertyforSaleRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropertyforSaleRequest $request)
    {
        $propertyforSale = $this->propertyforSaleRepository->findWithoutFail($id);

        if (empty($propertyforSale)) {
            Flash::error('Propertyfor Sale not found');

            return redirect(route('propertyforSales.index'));
        }

        $propertyforSale = $this->propertyforSaleRepository->update($request->all(), $id);

        Flash::success('Propertyfor Sale updated successfully.');

        return redirect(route('propertyforSales.index'));
    }

    /**
     * Remove the specified PropertyforSale from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propertyforSale = $this->propertyforSaleRepository->findWithoutFail($id);

        if (empty($propertyforSale)) {
            Flash::error('Propertyfor Sale not found');

            return redirect(route('propertyforSales.index'));
        }

        $this->propertyforSaleRepository->delete($id);

        Flash::success('Propertyfor Sale deleted successfully.');

        return redirect(route('propertyforSales.index'));
    }
}
