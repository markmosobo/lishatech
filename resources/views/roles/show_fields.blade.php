<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $role->id !!}</p>
</div>

<!-- Role Code Field -->
<div class="form-group">
    {!! Form::label('role_code', 'Role Code:') !!}
    <p>{!! $role->role_code !!}</p>
</div>

<!-- Role Name Field -->
<div class="form-group">
    {!! Form::label('role_name', 'Role Name:') !!}
    <p>{!! $role->role_name !!}</p>
</div>

<!-- Role Status Field -->
<div class="form-group">
    {!! Form::label('role_status', 'Role Status:') !!}
    <p>{!! $role->role_status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $role->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $role->updated_at !!}</p>
</div>

