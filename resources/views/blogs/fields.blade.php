<!-- Blog Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('blog_title', 'Blog Title:') !!}
    {!! Form::text('blog_title', null, ['class' => 'form-control']) !!}
</div>

<!-- Author Field -->
<div class="form-group col-sm-6">
    {!! Form::label('author', 'Author:') !!}
    {!! Form::text('author', null, ['class' => 'form-control']) !!}
</div>

<!-- Date Field -->
<div class="form-group col-sm-6">
    {!! Form::label('date', 'Date:') !!}
    {!! Form::date('date', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Path Field -->
<div class="form-group col-sm-12">
    {!! Form::label('image_path', 'Upload Image:') !!}
    {!! Form::file('image_path', null, ['class' => 'form-control']) !!}
</div>


<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

