<?php

namespace App\Http\Controllers;

use App\DataTables\SermonCategoryDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateSermonCategoryRequest;
use App\Http\Requests\UpdateSermonCategoryRequest;
use App\Repositories\SermonCategoryRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class SermonCategoryController extends AppBaseController
{
    /** @var  SermonCategoryRepository */
    private $sermonCategoryRepository;

    public function __construct(SermonCategoryRepository $sermonCategoryRepo)
    {
        $this->sermonCategoryRepository = $sermonCategoryRepo;
    }

    /**
     * Display a listing of the SermonCategory.
     *
     * @param SermonCategoryDataTable $sermonCategoryDataTable
     * @return Response
     */
    public function index(SermonCategoryDataTable $sermonCategoryDataTable)
    {
        return $sermonCategoryDataTable->render('sermon_categories.index');
    }

    /**
     * Show the form for creating a new SermonCategory.
     *
     * @return Response
     */
    public function create()
    {
        return view('sermon_categories.create');
    }

    /**
     * Store a newly created SermonCategory in storage.
     *
     * @param CreateSermonCategoryRequest $request
     *
     * @return Response
     */
    public function store(CreateSermonCategoryRequest $request)
    {
        $input = $request->all();

        $sermonCategory = $this->sermonCategoryRepository->create($input);

        Flash::success('Sermon Category saved successfully.');

        return redirect(route('sermonCategories.index'));
    }

    /**
     * Display the specified SermonCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $sermonCategory = $this->sermonCategoryRepository->findWithoutFail($id);

        if (empty($sermonCategory)) {
            Flash::error('Sermon Category not found');

            return redirect(route('sermonCategories.index'));
        }

        return view('sermon_categories.show')->with('sermonCategory', $sermonCategory);
    }

    /**
     * Show the form for editing the specified SermonCategory.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $sermonCategory = $this->sermonCategoryRepository->findWithoutFail($id);

        if (empty($sermonCategory)) {
            Flash::error('Sermon Category not found');

            return redirect(route('sermonCategories.index'));
        }

        return view('sermon_categories.edit')->with('sermonCategory', $sermonCategory);
    }

    /**
     * Update the specified SermonCategory in storage.
     *
     * @param  int              $id
     * @param UpdateSermonCategoryRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateSermonCategoryRequest $request)
    {
        $sermonCategory = $this->sermonCategoryRepository->findWithoutFail($id);

        if (empty($sermonCategory)) {
            Flash::error('Sermon Category not found');

            return redirect(route('sermonCategories.index'));
        }

        $sermonCategory = $this->sermonCategoryRepository->update($request->all(), $id);

        Flash::success('Sermon Category updated successfully.');

        return redirect(route('sermonCategories.index'));
    }

    /**
     * Remove the specified SermonCategory from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $sermonCategory = $this->sermonCategoryRepository->findWithoutFail($id);

        if (empty($sermonCategory)) {
            Flash::error('Sermon Category not found');

            return redirect(route('sermonCategories.index'));
        }

        $this->sermonCategoryRepository->delete($id);

        Flash::success('Sermon Category deleted successfully.');

        return redirect(route('sermonCategories.index'));
    }
}
