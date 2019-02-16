<!-- Title Field -->
<div class="form-group col-sm-12">
    {!! Form::label('title', 'Title:') !!}
    {!! Form::text('title', null, ['class' => 'form-control']) !!}
</div>

<!-- Sermon Date Field -->
<div class="form-group col-sm-12">
    {!! Form::label('sermon_date', 'Sermon Date:') !!}
    {!! Form::date('sermon_date', null, ['class' => 'form-control']) !!}
</div>

<!-- Member Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('member_id', 'Member Id:') !!}
    <select name="member_id" class="select2 form-control" id="member_id" required>
        <option value="">select member</option>
        @if(count($members))
            @foreach($members as $member)
                <option value="{{ $member->id }}">{{ $member->full_name }}</option>
            @endforeach
        @endif
    </select>
</div>

<!-- Description Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('description', 'Description:') !!}
    {!! Form::textarea('description', null, ['class' => 'form-control']) !!}
</div>

<!-- Body Field -->
<div class="form-group col-sm-12 col-lg-12">
    {!! Form::label('body', 'Body:') !!}
    {!! Form::textarea('body', null, ['class' => 'form-control']) !!}
</div>

