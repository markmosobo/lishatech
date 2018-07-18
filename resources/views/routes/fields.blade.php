<!-- Route Name Field -->
<div class="form-group">
    {!! Form::label('route_name', 'Route Name:') !!}
    {!! Form::text('route_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Url Field -->
<div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    {!! Form::text('url', null, ['class' => 'form-control']) !!}
</div>

<!-- Route Status Field -->
<div class="form-group">
    {!! Form::label('route_status', 'Route Status:') !!}
    <label class="checkbox-inline">
        {!! Form::hidden('route_status', false) !!}
        {!! Form::checkbox('route_status', '1', null) !!} 1
    </label>
</div>

<!-- Parent Route Field -->
<div class="form-group">
    {!! Form::label('parent_route', 'Parent Route:') !!}
    {!! Form::number('parent_route', null, ['class' => 'form-control']) !!}
</div>

<!-- Submit Field
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('routes.index') !!}" class="btn btn-default">Cancel</a>
</div>
-->
