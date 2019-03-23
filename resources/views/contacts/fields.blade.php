<!-- Address Field -->
<div class="form-group col-sm-12">
    {!! Form::label('address', 'Address:') !!}
    {!! Form::text('address', null, ['class' => 'form-control']) !!}
</div>

<!-- Alternative Address Field -->
<div class="form-group col-sm-12">
    {!! Form::label('alternative_address', 'Alternative Address:') !!}
    {!! Form::text('alternative_address', null, ['class' => 'form-control']) !!}
</div>

<!-- Phone Field -->
<div class="form-group col-sm-12">
    {!! Form::label('phone', 'Phone:') !!}
    {!! Form::text('phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Alternative Phone Field -->
<div class="form-group col-sm-12">
    {!! Form::label('alternative_phone', 'Alternative Phone:') !!}
    {!! Form::text('alternative_phone', null, ['class' => 'form-control']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control']) !!}
</div>

