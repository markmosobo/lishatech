
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu" data-widget="tree">
            @if(count($menu))
                @foreach($menu as $item)

                    @if(!$item->parent)
                        <li class="{{ ($item->url == $current_route->uri) ? 'active' : '' }}">
                    @else
                        <li class="treeview">
                            @endif

                            <a {{ ($item->parent) ? 'data-toggle=collapse' : '' }} href="{{ ($item->parent) ? $item->url . $item->id : url($item->url) }}">
                                {{--<i class="material-icons"></i>--}}
                                <i class="fa {{ $item->icon }}"></i> <span>{{ $item->title }}</span>
                                <span class="pull-right-container">
                                    <i class="fa fa-angle-left pull-right"></i>
                                </span>
                                {{--<p>{{ $item->title }} {!! ($item->parent) ? '<b class="caret"></b>' : '' !!}</p>--}}
                            </a>
                            @if($item->parent)
                                {{--<div class="collapse" id="{{ $item->id }}">--}}
                                    <ul class="treeview-menu">
                                        @if(count($item->children))
                                            @foreach($item->children as $child)
                                                <li class="{{ ($current_route->uri == $child->url) ? 'active child' : '' }}" id="{{ $child->url }}">
                                                    <a href="{{ url($child->url) }}"> <i class="fa fa-angle-right"></i>{{ $child->title }}</a>
                                                </li>
                                            @endforeach
                                        @endif
                                    </ul>
                                {{--</div>--}}
                            @endif
                        </li>

                        @endforeach
                    @endif
        </ul>
    </section>
    <!-- /.sidebar -->
</aside>
@push('js')
    <script>
        $('li.child.active:first').parents('li').addClass('active');
        $('li.child.active:first').parents('div.collapse').addClass('in');

        $('.portal-logout').on('click', function() {
            $('#portal-logout-form').submit();
        });
    </script>
@endpush