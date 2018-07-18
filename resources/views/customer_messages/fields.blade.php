<!-- Phone Number Field -->
<div class="form-group col-sm-12">
    {!! Form::label('phone_number', 'Phone Number:') !!}
    {!! Form::text('phone_number', null, ['class' => 'form-control']) !!}
</div>

<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- User Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('user_id', 'User Id:') !!}
    {!! Form::number('user_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Message Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('message', 'Message:') !!}
    {!! Form::textarea('message', null, ['class' => 'form-control']) !!}
</div>

<!-- Sent Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sent', 'Sent:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('sent', false) !!}
        {!! Form::checkbox('sent', '1', null) !!} 1
    </label>
</div>

<!-- Execution Time Field -->
<div class="form-group col-sm-12">
    {!! Form::label('execution_time', 'Execution Time:') !!}
    {!! Form::date('execution_time', null, ['class' => 'form-control']) !!}
</div>

<!-- Tenant Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tenant_id', 'Tenant Id:') !!}
    {!! Form::number('tenant_id', null, ['class' => 'form-control']) !!}
</div>

