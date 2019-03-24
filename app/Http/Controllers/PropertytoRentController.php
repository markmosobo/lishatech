<?php

namespace App\Http\Controllers;

use App\DataTables\PropertytoRentDataTable;
use App\Http\Requests;
use App\Http\Requests\CreatePropertytoRentRequest;
use App\Http\Requests\UpdatePropertytoRentRequest;
use App\Repositories\PropertytoRentRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class PropertytoRentController extends AppBaseController
{
    /** @var  PropertytoRentRepository */
    private $propertytoRentRepository;

    public function __construct(PropertytoRentRepository $propertytoRentRepo)
    {
        $this->propertytoRentRepository = $propertytoRentRepo;
    }

    /**
     * Display a listing of the PropertytoRent.
     *
     * @param PropertytoRentDataTable $propertytoRentDataTable
     * @return Response
     */
    public function index(PropertytoRentDataTable $propertytoRentDataTable)
    {
        return $propertytoRentDataTable->render('propertyto_rents.index');
    }

    /**
     * Show the form for creating a new PropertytoRent.
     *
     * @return Response
     */
    public function create()
    {
        return view('propertyto_rents.create');
    }

    /**
     * Store a newly created PropertytoRent in storage.
     *
     * @param CreatePropertytoRentRequest $request
     *
     * @return Response
     */
    public function store(CreatePropertytoRentRequest $request)
    {
        $input = $request->all();

        $propertytoRent = $this->propertytoRentRepository->create($input);

        Flash::success('Propertyto Rent saved successfully.');

        return redirect(route('propertytoRents.index'));
    }

    /**
     * Display the specified PropertytoRent.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $propertytoRent = $this->propertytoRentRepository->findWithoutFail($id);

        if (empty($propertytoRent)) {
            Flash::error('Propertyto Rent not found');

            return redirect(route('propertytoRents.index'));
        }

        return response()->json($propertytoRent);
    }

    /**
     * Show the form for editing the specified PropertytoRent.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $propertytoRent = $this->propertytoRentRepository->findWithoutFail($id);

        if (empty($propertytoRent)) {
            Flash::error('Propertyto Rent not found');

            return redirect(route('propertytoRents.index'));
        }

        return view('propertyto_rents.edit')->with('propertytoRent', $propertytoRent);
    }

    /**
     * Update the specified PropertytoRent in storage.
     *
     * @param  int              $id
     * @param UpdatePropertytoRentRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePropertytoRentRequest $request)
    {
        $propertytoRent = $this->propertytoRentRepository->findWithoutFail($id);

        if (empty($propertytoRent)) {
            Flash::error('Propertyto Rent not found');

            return redirect(route('propertytoRents.index'));
        }

        $propertytoRent = $this->propertytoRentRepository->update($request->all(), $id);

        Flash::success('Propertyto Rent updated successfully.');

        return redirect(route('propertytoRents.index'));
    }

    /**
     * Remove the specified PropertytoRent from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $propertytoRent = $this->propertytoRentRepository->findWithoutFail($id);

        if (empty($propertytoRent)) {
            Flash::error('Propertyto Rent not found');

            return redirect(route('propertytoRents.index'));
        }

        $this->propertytoRentRepository->delete($id);

        Flash::success('Propertyto Rent deleted successfully.');

        return redirect(route('propertytoRents.index'));
    }
}
