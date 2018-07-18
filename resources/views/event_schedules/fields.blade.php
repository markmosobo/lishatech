<!-- Event Id Field -->
{{--<div class="form-group col-sm-12">--}}
{{--    {!! Form::label('event_id', 'Event Id:') !!}--}}
    {!! Form::hidden('event_id', $id, ['class' => 'form-control']) !!}
{{--</div>--}}

<!-- Start At Field -->
<div class="form-group col-sm-12">
    {!! Form::label('start_at', 'Start At:') !!}
    {!! Form::time('start_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Ends At Field -->
<div class="form-group col-sm-12">
    {!! Form::label('ends_at', 'Ends At:') !!}
    {!! Form::time('ends_at', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

