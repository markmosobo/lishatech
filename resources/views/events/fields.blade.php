<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control','required']) !!}
</div>
<div class="form-group col-sm-12">
    {!! Form::label('venue', 'Venue:') !!}
    {!! Form::text('location', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Event Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('event_date', 'Event Date:') !!}
    {!! Form::date('event_date', null, ['class' => 'form-control','required']) !!}
</div>

<!-- Title Image Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title_image', 'Title Image:') !!}
    {!! Form::text('title_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Image Field -->
<div class="form-group col-sm-12">
    {!! Form::label('body_image', 'Body Image:') !!}
    {!! Form::text('body_image', null, ['class' => 'form-control']) !!}
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control','rows'=>3]) !!}
</div>

