<nav class="navbar navbar-primary navbar-transparent navbar-absolute">
    <div class="container">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example-2">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="{{ url('home') }}">{{ config('app.name') }}</a>
        </div>
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-right">

                {{--<li class="{{ (request()->route()->getName() == 'register') ? 'active' : '' }}">--}}
                    {{--<a href="{{ url('register') }}">--}}
                        {{--<i class="material-icons">person_add</i> Register--}}
                    {{--</a>--}}
                {{--</li>--}}
                <li class="{{ (request()->route()->getName() == 'login') ? 'active' : '' }}">
                    <a href="{{ url('login') }}">
                        <i class="material-icons">fingerprint</i> Login
                    </a>
                </li>
            </ul>
        </div>
    </div>
</nav>