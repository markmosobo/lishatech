<!-- Property Title Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('property_title_id', 'Property Title Id:') !!}
    <select name="property_title_id" class="select2 form-control" required>
        <option value="">Select property</option>
        @if(count($properties))
            @foreach($properties as $property)
                <option value="{{ $property->id  }}">{{ $property->property_title }}</option>
            @endforeach
        @endif
    </select>
</div>

<!-- Type Field -->
<div class="form-group col-sm-6">
    {!! Form::label('type', 'Type:') !!}
    <select name="type" class="select2 form-control" required>
        <option value="Apartment">Apartment</option>
        <option value="Cafe">Cafe</option>
        <option value="House">House</option>
        <option value="Restaurant">Restaurant</option>
        <option value="Store">Store</option>
        <option value="Villa">Villa</option>
    </select>
</div>

<!-- Area Field -->
<div class="form-group col-sm-6">
    {!! Form::label('area', 'Area(SqFt):') !!}
    {!! Form::number('area', null, ['class' => 'form-control']) !!}
</div>

<!-- Building Age Field -->
<div class="form-group col-sm-6">
    {!! Form::label('building_age', 'Building Age:') !!}
    <select name="building_age" class="select2 form-control" required>
        <option value="1 year">1 year</option>
        <option value="2 years">2 years</option>
        <option value="3 years">3 years</option>
        <option value="4 years">4 years</option>
        <option value="5 years">5 years</option>
        <option value="6 years">6 years</option>
        <option value="7 years">7 years</option>
        <option value="8 years">8 years</option>
        <option value="9 years">9 years</option>
    </select>
</div>

<!-- Bedrooms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bedrooms', 'Bedrooms:') !!}
    <select name="bedrooms" class="select2 form-control" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
    </select>
</div>

<!-- Bathrooms Field -->
<div class="form-group col-sm-6">
    {!! Form::label('bathrooms', 'Bathrooms:') !!}
    <select name="bathrooms" class="select2 form-control" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
        <option value="5">5</option>
        <option value="6">6</option>
        <option value="7">7</option>
        <option value="8">8</option>
        <option value="9">9</option>
    </select>
</div>

<!-- Kitchen Field -->
<div class="form-group col-sm-6">
    {!! Form::label('kitchen', 'Kitchen:') !!}
    <select name="kitchen" class="select2 form-control" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
    </select>
</div>

<!-- Garage Field -->
<div class="form-group col-sm-6">
    {!! Form::label('garage', 'Garage:') !!}
    <select name="garage" class="select2 form-control" required>
        <option value="1">1</option>
        <option value="2">2</option>
        <option value="3">3</option>
        <option value="4">4</option>
    </select>
</div>

<!-- Cooling Field -->
<div class="form-group col-sm-6">
    {!! Form::label('cooling', 'Cooling:') !!}
    <select name="cooling" class="select2 form-control" required>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
</div>

<!-- Heating Field -->
<div class="form-group col-sm-6">
    {!! Form::label('heating', 'Heating:') !!}
    <select name="heating" class="select2 form-control" required>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
</div>

<!-- Sewer Field -->
<div class="form-group col-sm-6">
    {!! Form::label('sewer', 'Sewer:') !!}
    <select name="sewer" class="select2 form-control" required>
        <option value="Yes">Yes</option>
        <option value="No">No</option>
    </select>
</div>

{{--<!-- Water Field -->--}}
{{--<div class="form-group col-sm-12">--}}
    {{--{!! Form::label('water', 'Water:') !!}--}}
    {{--{!! Form::text('water', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

{{--<!-- Other Features Field -->--}}
{{--<div class="form-group col-sm-12">--}}
    {{--{!! Form::label('other_features', 'Other Features:') !!}--}}
    {{--{!! Form::text('other_features', null, ['class' => 'form-control']) !!}--}}
{{--</div>--}}

