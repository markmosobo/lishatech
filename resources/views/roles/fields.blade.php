<!-- Role Code Field -->
<div class="form-group">
    {!! Form::label('code', 'Role Code:') !!}
    {!! Form::text('code', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Name Field -->
<div class="form-group">
    {!! Form::label('name', 'Role Name:') !!}
    {!! Form::text('name', null, ['class' => 'form-control']) !!}
</div>

<!-- Role Status Field -->
{{--<div class="form-group">
    {!! Form::label('role_status', 'Role Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('role_status', false) !!}
        {!! Form::checkbox('role_status', '1', null) !!} 1
    </label>
</div>--}}
<div class="form-group">
    {!! Form::label('access_level_id', 'Access Level:') !!}
    <select name="access_level_id" class=" form-control select2" id="access_level_id">
        <option value="">Select access level</option>
        @if(count($accessLevels))
            @foreach($accessLevels as $accessLevel)
                <option value="{{ $accessLevel->id }}">{{ $accessLevel->name }}</option>
                @endforeach
            @endif
    </select>
</div>

<!-- Submit Field
<div class="form-group col-sm-12">
    {{--{!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}--}}
    {{--<a href="{!! route('roles.index') !!}" class="btn btn-default">Cancel</a>--}}
</div>
-->
