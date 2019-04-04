<?php

namespace App\Http\Controllers;

use App\DataTables\PropertyforRentDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePropertyforRentRequest;
use App\Http\Requests\UpdatePropertyforRentRequest;
use App\Repositories\PropertyforRentRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PropertyforRentController extends AppBaseController
{
    /** @var  PropertyforRentRepository */
    private $propertyforRentRepository;

    public function __construct(PropertyforRentRepository $propertyforRentRepo)
    {
        $this->propertyforRentRepository = $propertyforRentRepo;
    }

    /**
     * Display a listing of the PropertyforRent.
     *
     * @param PropertyforRentDataTable $propertyforRentDataTable
     * @return Response
     */
    public function index(PropertyforRentDataTable $propertyforRentDataTable)
    {
        return $propertyforRentDataTable->render('propertyfor_rents.index');
    }

    /**
     * Show the form for creating a new PropertyforRent.
     *
     * @return Response
     */
    public function create()
    {
        return view('propertyfor_rents.create');
    }

    /**
     * Store a newly created PropertyforRent in storage.
     *
     * @param CreatePropertyforRentRequest $request
     *
     * @return Response
     */
    public function store(CreatePropertyforRentRequest $request)
    {
        $input = $request->all();

        $propertyforRent = $this->propertyforRentRepository->create($input);

        Flash::success('Propertyfor Rent saved successfully.');

        return redirect(route('propertyforRents.index'));
    }

    /**
     * Display the specified PropertyforRent.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propertyforRent = $this->propertyforRentRepository->findWithoutFail($id);

        if (empty($propertyforRent)) {
            Flash::error('Propertyfor Rent not found');

            return redirect(route('propertyforRents.index'));
        }

        return view('propertyfor_rents.show')->with('propertyforRent', $propertyforRent);
    }

    /**
     * Show the form for editing the specified PropertyforRent.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propertyforRent = $this->propertyforRentRepository->findWithoutFail($id);

        if (empty($propertyforRent)) {
            Flash::error('Propertyfor Rent not found');

            return redirect(route('propertyforRents.index'));
        }

        return view('propertyfor_rents.edit')->with('propertyforRent', $propertyforRent);
    }

    /**
     * Update the specified PropertyforRent in storage.
     *
     * @param  int              $id
     * @param UpdatePropertyforRentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropertyforRentRequest $request)
    {
        $propertyforRent = $this->propertyforRentRepository->findWithoutFail($id);

        if (empty($propertyforRent)) {
            Flash::error('Propertyfor Rent not found');

            return redirect(route('propertyforRents.index'));
        }

        $propertyforRent = $this->propertyforRentRepository->update($request->all(), $id);

        Flash::success('Propertyfor Rent updated successfully.');

        return redirect(route('propertyforRents.index'));
    }

    /**
     * Remove the specified PropertyforRent from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propertyforRent = $this->propertyforRentRepository->findWithoutFail($id);

        if (empty($propertyforRent)) {
            Flash::error('Propertyfor Rent not found');

            return redirect(route('propertyforRents.index'));
        }

        $this->propertyforRentRepository->delete($id);

        Flash::success('Propertyfor Rent deleted successfully.');

        return redirect(route('propertyforRents.index'));
    }
}
