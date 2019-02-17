<!-- Author Field -->
<div class="form-group col-sm-12">
    {!! Form::label('author', 'Author:') !!}
    {!! Form::text('author', null, ['class' => 'form-control']) !!}
</div>

<!-- Blog Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('blog_date', 'Blog Date:') !!}
    {!! Form::date('blog_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Blog Category Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('blog_category_id', 'Blog Category Id:') !!}
    <select name="blog_category_id" class="select2 form-control" id="blog_category_id" required>
        <option value="">select blog</option>
        @if(count($blogcategories))
            @foreach($blogcategories as $blogcategory)
                <option value="{{ $blogcategory->id }}">{{ $blogcategory->full_name }}</option>
            @endforeach
        @endif
    </select>
</div>

<!-- Image Path Field -->
<div class="form-group col-sm-12">
    {!! Form::label('image_path', 'Image Path:') !!}
    {!! Form::text('image_path', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

