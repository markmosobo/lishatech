<!-- Blog Category Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('blog_category_id', 'Blog Category Id:') !!}
    <select name="blog_category_id" class="select2 form-control" id="blog_category_id" required>
        <option value="">select blogCategory</option>
        @if(count($blogCategories))
            @foreach($blogCategories as $blogCategory)
                <option value="{{ $blogCategory->id }}">{{ $blogCategory->name }}</option>
            @endforeach
        @endif
    </select>
</div>

<!-- Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Field -->
<div class="form-group col-sm-12">
    {!! Form::label('author', 'Author:') !!}
    {!! Form::text('author', null, ['class' => 'form-control']) !!}
</div>

<!-- Blog Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('blog_title', 'Blog Title:') !!}
    {!! Form::text('blog_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Media Path Field -->
<div class="form-group col-sm-12">
    {!! Form::label('media_path', 'Media Path:') !!}
    <form action="upload.php" class="form-group" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input type="file" name="fileToUpload" id="fileToUpload">
        {{--<input type="submit" value="Upload Image" name="submit">--}}
    </form>
</div>

<!-- Blog Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('blog_body', 'Blog Body:') !!}
    {!! Form::textarea('blog_body', null, ['class' => 'form-control']) !!}
</div>

