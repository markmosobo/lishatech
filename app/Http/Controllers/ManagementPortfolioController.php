<?php

namespace App\Http\Controllers;

use App\DataTables\ManagementPortfolioDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateManagementPortfolioRequest;
use App\Http\Requests\UpdateManagementPortfolioRequest;
use App\Models\PropertytoRent;
use App\Repositories\ManagementPortfolioRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class ManagementPortfolioController extends AppBaseController
{
    /** @var  ManagementPortfolioRepository */
    private $managementPortfolioRepository;

    public function __construct(ManagementPortfolioRepository $managementPortfolioRepo)
    {
        $this->managementPortfolioRepository = $managementPortfolioRepo;
    }

    /**
     * Display a listing of the ManagementPortfolio.
     *
     * @param ManagementPortfolioDataTable $managementPortfolioDataTable
     * @return Response
     */
    public function index(ManagementPortfolioDataTable $managementPortfolioDataTable)
    {
        return $managementPortfolioDataTable->render('management_portfolios.index',['properties'=>PropertytoRent::all()]);
    }

    /**
     * Show the form for creating a new ManagementPortfolio.
     *
     * @return Response
     */
    public function create()
    {
        return view('management_portfolios.create');
    }

    /**
     * Store a newly created ManagementPortfolio in storage.
     *
     * @param CreateManagementPortfolioRequest $request
     *
     * @return Response
     */
    public function store(CreateManagementPortfolioRequest $request)
    {
        $input = $request->all();

        if($request->hasFile('image_path')){
            $ext = $request->image_path->getClientOriginalExtension();
//            var_dump($ext)
            $input['extension'] = $ext;
            $input['image_path'] = $request->file('image_path')->getClientOriginalName();
//            $path = $request->file('image_path')->storeAs('public',$string = str_replace(' ', '-', Carbon::today()->toDateString()).'-'.Carbon::now()->timestamp.'.'.$ext);
//            var_dump($request->file('document_path')->getClientOriginalName());die();
            $path = $request->file('image_path')->store('public');
            $input['image_path'] = asset('storage/'.$path);

        }

        $managementPortfolio = $this->managementPortfolioRepository->create($input);

        Flash::success('Management Portfolio saved successfully.');

        return redirect(route('managementPortfolios.index'));
    }

    /**
     * Display the specified ManagementPortfolio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $managementPortfolio = $this->managementPortfolioRepository->findWithoutFail($id);

        if (empty($managementPortfolio)) {
            Flash::error('Management Portfolio not found');

            return redirect(route('managementPortfolios.index'));
        }

        return response()->json($managementPortfolio);
    }

    /**
     * Show the form for editing the specified ManagementPortfolio.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $managementPortfolio = $this->managementPortfolioRepository->findWithoutFail($id);

        if (empty($managementPortfolio)) {
            Flash::error('Management Portfolio not found');

            return redirect(route('managementPortfolios.index'));
        }

        return view('management_portfolios.edit')->with('managementPortfolio', $managementPortfolio);
    }

    /**
     * Update the specified ManagementPortfolio in storage.
     *
     * @param  int              $id
     * @param UpdateManagementPortfolioRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateManagementPortfolioRequest $request)
    {
        $managementPortfolio = $this->managementPortfolioRepository->findWithoutFail($id);

        if (empty($managementPortfolio)) {
            Flash::error('Management Portfolio not found');

            return redirect(route('managementPortfolios.index'));
        }

        $managementPortfolio = $this->managementPortfolioRepository->update($request->all(), $id);

        Flash::success('Management Portfolio updated successfully.');

        return redirect(route('managementPortfolios.index'));
    }

    /**
     * Remove the specified ManagementPortfolio from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $managementPortfolio = $this->managementPortfolioRepository->findWithoutFail($id);

        if (empty($managementPortfolio)) {
            Flash::error('Management Portfolio not found');

            return redirect(route('managementPortfolios.index'));
        }

        $this->managementPortfolioRepository->delete($id);

        Flash::success('Management Portfolio deleted successfully.');

        return redirect(route('managementPortfolios.index'));
    }
}
