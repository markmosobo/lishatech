<!-- Property Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('property_name', 'Property Name:') !!}
    {!! Form::text('property_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Address Field -->
<div class="form-group col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Status Field -->
<div class="form-group col-sm-12">
    {!! Form::label('status', 'Status:') !!}
    {!! Form::text('status', null, ['class' => 'form-control']) !!}
</div>

<!-- Rent Field -->
<div class="form-group col-sm-12">
    {!! Form::label('rent', 'Rent:') !!}
    {!! Form::number('rent', null, ['class' => 'form-control']) !!}
</div>

<!-- Image Path Field -->
<div class="form-group col-sm-12">
    {!! Form::label('image_path', 'Image Path:') !!}
    {!! Form::text('image_path', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

