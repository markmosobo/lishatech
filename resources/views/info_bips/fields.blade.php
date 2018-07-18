<!-- Tenant Id Field -->
<div class="form-group col-sm-12">
    {!! Form::label('tenant_id', 'Tenant Id:') !!}
    <select name="tenant_id" class="form-control select2" required id="tenant_id">
        <option value="">Select tenant</option>
        @if(count($tenants))
            @foreach($tenants as $tenant)
                <option value="{{ $tenant->id }}">{{ $tenant->name }}</option>
                @endforeach
            @endif
    </select>
</div>

<!-- Username Field -->
<div class="form-group col-sm-12">
    {!! Form::label('username', 'Username:') !!}
    {!! Form::text('username', null, ['class' => 'form-control']) !!}
</div>

<!-- Alphanumeric Field -->
<div class="form-group col-sm-12">
    {!! Form::label('alphanumeric', 'Alphanumeric:') !!}
    {!! Form::text('alphanumeric', null, ['class' => 'form-control']) !!}
</div>

<!-- Password Field -->
<div class="form-group col-sm-12">
    {!! Form::label('password', 'Password:') !!}
    <input type="text" name="password" class="form-control" required id="password">
</div>

<!-- Status Field -->
{{--<div class="form-group col-sm-12">--}}
    {{--{!! Form::label('status', 'Status:') !!}--}}
    {{--<label class="checkbox-inline">--}}
        {{--{!! Form::hidden('status', false) !!}--}}
        {{--{!! Form::checkbox('status', '1', null) !!} 1--}}
    {{--</label>--}}
{{--</div>--}}

