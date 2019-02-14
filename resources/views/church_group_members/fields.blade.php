<!-- Member Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('member_id', 'Member Id:') !!}
    {!! Form::number('member_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Church Group Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('church_group_id', 'Church Group Id:') !!}
    {!! Form::number('church_group_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Field -->
<div class="form-group col-sm-12">
    {!! Form::label('role', 'Role:') !!}
    {!! Form::text('role', null, ['class' => 'form-control']) !!}
</div>

