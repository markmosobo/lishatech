@if(session()->has('success'))
    <div class="alert alert-success">
        <button class="close" data-dismiss="alert">&times;</button>
        <strong>Success!</strong> {{ session('success') }}
    </div>
@endif