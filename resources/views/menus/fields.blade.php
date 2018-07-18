<!-- Menu Name Field -->
<div class="form-group">
    {!! Form::label('menu_name', 'Menu Name:') !!}
    {!! Form::text('menu_name', null, ['class' => 'form-control']) !!}
</div>

<!-- Parent Menu Field -->
<div class="form-group">
    {!! Form::label('parent_menu', 'Parent Menu:') !!}
    {!! Form::number('parent_menu', null, ['class' => 'form-control']) !!}
</div>

<!-- Route Id Field -->
<div class="form-group">
    {!! Form::label('route_id', 'Route Id:') !!}
    {!! Form::number('route_id', null, ['class' => 'form-control']) !!}
</div>

<!-- Sequence Field -->
<div class="form-group">
    {!! Form::label('sequence', 'Sequence:') !!}
    {!! Form::number('sequence', null, ['class' => 'form-control']) !!}
</div>

<!-- Menu Status Field -->

<div class="form-group">
  {!! Form::label('menu_status', 'Menu Status:') !!}
  <select name="menu_status" class="form-control select2">
    <option value="0">No</option>
    <option value="1">Yes</option>
  </select>
</div>

<!-- Submit Field
<div class="form-group col-sm-12">
    {!! Form::submit('Save', ['class' => 'btn btn-primary']) !!}
    <a href="{!! route('menus.index') !!}" class="btn btn-default">Cancel</a>
</div>
-->
