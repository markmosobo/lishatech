<!-- Name Field -->
<div class="form-group col-sm-12">
    {!! Form::label('name', 'Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Email Field -->
<div class="form-group col-sm-12">
    {!! Form::label('email', 'Email:') !!}
    {!! Form::email('email', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Role Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('role_id', 'Role:') !!}
    <select name="role_id" class="form-control select2" required>
        <option value="">Select role</option>
        @if(count($roles))
            @foreach($roles as $role)
                <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        @endif
    </select>
</div>




