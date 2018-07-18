<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $route->id !!}</p>
</div>

<!-- Route Name Field -->
<div class="form-group">
    {!! Form::label('route_name', 'Route Name:') !!}
    <p>{!! $route->route_name !!}</p>
</div>

<!-- Url Field -->
<div class="form-group">
    {!! Form::label('url', 'Url:') !!}
    <p>{!! $route->url !!}</p>
</div>

<!-- Route Status Field -->
<div class="form-group">
    {!! Form::label('route_status', 'Route Status:') !!}
    <p>{!! $route->route_status !!}</p>
</div>

<!-- Parent Route Field -->
<div class="form-group">
    {!! Form::label('parent_route', 'Parent Route:') !!}
    <p>{!! $route->parent_route !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $route->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $route->updated_at !!}</p>
</div>

