<?php

namespace App\Http\Controllers;

use App\DataTables\BlogDataTable;
use App\Http\Requests;
use App\Http\Requests\CreateBlogRequest;
use App\Http\Requests\UpdateBlogRequest;
use App\Repositories\BlogRepository;
use Flash;
use App\Http\Controllers\AppBaseController;
use Response;

class BlogController extends AppBaseController
{
    /** @var  BlogRepository */
    private $blogRepository;

    public function __construct(BlogRepository $blogRepo)
    {
        $this->blogRepository = $blogRepo;
    }

    /**
     * Display a listing of the Blog.
     *
     * @param BlogDataTable $blogDataTable
     * @return Response
     */
    public function index(BlogDataTable $blogDataTable)
    {
        return $blogDataTable->render('blogs.index');
    }

    /**
     * Show the form for creating a new Blog.
     *
     * @return Response
     */
    public function create()
    {
        return view('blogs.create');
    }

    /**
     * Store a newly created Blog in storage.
     *
     * @param CreateBlogRequest $request
     *
     * @return Response
     */
    public function store(CreateBlogRequest $request)
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

        $blog = $this->blogRepository->create($input);

        Flash::success('Blog saved successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Display the specified Blog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $blog = $this->blogRepository->findWithoutFail($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return response()->json($blog);
    }

    /**
     * Show the form for editing the specified Blog.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $blog = $this->blogRepository->findWithoutFail($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        return view('blogs.edit')->with('blog', $blog);
    }

    /**
     * Update the specified Blog in storage.
     *
     * @param  int              $id
     * @param UpdateBlogRequest $request
     *
     * @return Response
     */
    public function update($id, UpdateBlogRequest $request)
    {
        $blog = $this->blogRepository->findWithoutFail($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $blog = $this->blogRepository->update($request->all(), $id);

        Flash::success('Blog updated successfully.');

        return redirect(route('blogs.index'));
    }

    /**
     * Remove the specified Blog from storage.
     *
     * @param  int $id
     *
     * @return Response
     */
    public function destroy($id)
    {
        $blog = $this->blogRepository->findWithoutFail($id);

        if (empty($blog)) {
            Flash::error('Blog not found');

            return redirect(route('blogs.index'));
        }

        $this->blogRepository->delete($id);

        Flash::success('Blog deleted successfully.');

        return redirect(route('blogs.index'));
    }
}
