@if(session()->has('error'))
    <div class="alert alert-warning">
        <button class="close" data-dismiss="alert">&times;</button>
        <strong>Warning!</strong> {{ session()->get('error') }}
    </div>
@endif
@if ($errors->has('email'))
    <div class="alert alert-danger">
        <button class="close" data-dismiss="alert">&times;</button>
        <strong>Warning!</strong> {{ $errors->first('email') }}
    </div>
@endif