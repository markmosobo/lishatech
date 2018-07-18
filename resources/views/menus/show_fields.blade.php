<!-- Id Field -->
<div class="form-group">
    {!! Form::label('id', 'Id:') !!}
    <p>{!! $menu->id !!}</p>
</div>

<!-- Menu Name Field -->
<div class="form-group">
    {!! Form::label('menu_name', 'Menu Name:') !!}
    <p>{!! $menu->menu_name !!}</p>
</div>

<!-- Parent Menu Field -->
<div class="form-group">
    {!! Form::label('parent_menu', 'Parent Menu:') !!}
    <p>{!! $menu->parent_menu !!}</p>
</div>

<!-- Route Id Field -->
<div class="form-group">
    {!! Form::label('route_id', 'Route Id:') !!}
    <p>{!! $menu->route_id !!}</p>
</div>

<!-- Sequence Field -->
<div class="form-group">
    {!! Form::label('sequence', 'Sequence:') !!}
    <p>{!! $menu->sequence !!}</p>
</div>

<!-- Menu Status Field -->
<div class="form-group">
    {!! Form::label('menu_status', 'Menu Status:') !!}
    <p>{!! $menu->menu_status !!}</p>
</div>

<!-- Created At Field -->
<div class="form-group">
    {!! Form::label('created_at', 'Created At:') !!}
    <p>{!! $menu->created_at !!}</p>
</div>

<!-- Updated At Field -->
<div class="form-group">
    {!! Form::label('updated_at', 'Updated At:') !!}
    <p>{!! $menu->updated_at !!}</p>
</div>

