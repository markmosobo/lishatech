<?php

namespace App\Http\Controllers;

use App\DataTables\CommonQuestionDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateCommonQuestionRequest;
use App\Http\Requests\UpdateCommonQuestionRequest;
use App\Repositories\CommonQuestionRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class CommonQuestionController extends AppBaseController
{
    /** @var  CommonQuestionRepository */
    private $commonQuestionRepository;

    public function __construct(CommonQuestionRepository $commonQuestionRepo)
    {
        $this->commonQuestionRepository = $commonQuestionRepo;
    }

    /**
     * Display a listing of the CommonQuestion.
     *
     * @param CommonQuestionDataTable $commonQuestionDataTable
     * @return Response
     */
    public function index(CommonQuestionDataTable $commonQuestionDataTable)
    {
        return $commonQuestionDataTable->render('common_questions.index');
    }

    /**
     * Show the form for creating a new CommonQuestion.
     *
     * @return Response
     */
    public function create()
    {
        return view('common_questions.create');
    }

    /**
     * Store a newly created CommonQuestion in storage.
     *
     * @param CreateCommonQuestionRequest $request
     *
     * @return Response
     */
    public function store(CreateCommonQuestionRequest $request)
    {
        $input = $request->all();

        $commonQuestion = $this->commonQuestionRepository->create($input);

        Flash::success('Common Question saved successfully.');

        return redirect(route('commonQuestions.index'));
    }

    /**
     * Display the specified CommonQuestion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $commonQuestion = $this->commonQuestionRepository->findWithoutFail($id);

        if (empty($commonQuestion)) {
            Flash::error('Common Question not found');

            return redirect(route('commonQuestions.index'));
        }

        return response()->json($commonQuestion);
    }

    /**
     * Show the form for editing the specified CommonQuestion.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $commonQuestion = $this->commonQuestionRepository->findWithoutFail($id);

        if (empty($commonQuestion)) {
            Flash::error('Common Question not found');

            return redirect(route('commonQuestions.index'));
        }

        return view('common_questions.edit')->with('commonQuestion', $commonQuestion);
    }

    /**
     * Update the specified CommonQuestion in storage.
     *
     * @param  int              $id
     * @param UpdateCommonQuestionRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateCommonQuestionRequest $request)
    {
        $commonQuestion = $this->commonQuestionRepository->findWithoutFail($id);

        if (empty($commonQuestion)) {
            Flash::error('Common Question not found');

            return redirect(route('commonQuestions.index'));
        }

        $commonQuestion = $this->commonQuestionRepository->update($request->all(), $id);

        Flash::success('Common Question updated successfully.');

        return redirect(route('commonQuestions.index'));
    }

    /**
     * Remove the specified CommonQuestion from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $commonQuestion = $this->commonQuestionRepository->findWithoutFail($id);

        if (empty($commonQuestion)) {
            Flash::error('Common Question not found');

            return redirect(route('commonQuestions.index'));
        }

        $this->commonQuestionRepository->delete($id);

        Flash::success('Common Question deleted successfully.');

        return redirect(route('commonQuestions.index'));
    }
}
