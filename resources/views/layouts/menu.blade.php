{{--<li class="{{ Request::is('routes*') ? 'active' : '' }}">
    <a href="{!! route('routes.index') !!}"><i class="fa fa-edit"></i><span>Routes</span></a>
</li>--}}



{{--<li class="{{ Request::is('routes*') ? 'active' : '' }}">--}}
    {{--<a href="{!! route('routes.index') !!}"><i class="fa fa-edit"></i><span>Routes</span></a>--}}
{{--</li>--}}
{{--


<li class="treeview active">
    <a href="#">
        <i class="fa fa-edit"></i> <span>Forms</span>
        <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
    </a>
    <ul class="treeview-menu">
        <li class="{{ Request::is('roles*') ? 'active' : '' }}">
            <a href="{!! route('roles.index') !!}"><i class="fa fa-edit"></i><span>Roles</span></a>
        </li>

        <li class="{{ Request::is('menus*') ? 'active' : '' }}">
            <a href="{!! route('menus.index') !!}"><i class="fa fa-circle-o"></i><span>Menus</span></a>
        </li>
        <li><a href="../forms/general.html"><i class="fa "></i> General Elements</a></li>
        <li><a href="../forms/advanced.html"><i class="fa fa-circle-o"></i> Advanced Elements</a></li>
        <li><a href="../forms/editors.html"><i class="fa fa-circle-o"></i> Editors</a></li>
    </ul>
</li>--}}

<?php
$smenu = new \App\Http\Controllers\LoadMenus();
$smenu->loadSideMenu(NULL);
?>











