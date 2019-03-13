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
    <select name="status" class="form-control select2" id="status" required>
        <option value="">Select Status</option>

                <option value="To Rent - Commercial">To Rent - Commercial</option>
                <option value="To Rent - Residential">To Rent - Residential</option>
                <option value="For Sale - Commercial">For Sale - Commercial</option>
                <option value="For Sale - Residential">For Sale - Residential</option>

    </select>
</div>

<!-- Price Field -->
<div class="form-group col-sm-12">
    {!! Form::label('price', 'Price:') !!}
    {!! Form::number('price', null, ['class' => 'form-control']) !!}
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

