<!-- Property Title Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('property_title_id', 'Property Title Id:') !!}
    <select name="property_title_id" class="select2 form-control" id="property_title_id" required>
        <option value="">select Property</option>
        @if(count($properties))
            @foreach($properties as $property)
                <option value="{{ $property->id }}">{{ $property->property_title }}</option>
            @endforeach
        @endif
    </select>
</div>

<!-- Image Path Field -->
<div class="form-group col-sm-12">
    {!! Form::label('image_path', 'Upload Property Image:') !!}
    {!! Form::file('image_path', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>3]) !!}
</div>

