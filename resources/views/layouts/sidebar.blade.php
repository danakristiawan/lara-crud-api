@auth
    <a href="{{ route('home') }}"
        class="list-group-item list-group-item-action {{ Request::is('home') ? 'active' : '' }}">Home</a>
    @can('operator')
        @foreach (\App\Models\Menu::operator()->get() as $r)
            <a href="{{ route($r->route_name) }}"
                class="list-group-item list-group-item-action {{ Request::is($r->url_name) ? 'active' : '' }}">{{ $r->menu_name }}</a>
        @endforeach
    @endcan
    @can('supervisor')
        @foreach (\App\Models\Menu::supervisor()->get() as $r)
            <a href="{{ route($r->route_name) }}"
                class="list-group-item list-group-item-action {{ Request::is($r->url_name) ? 'active' : '' }}">{{ $r->menu_name }}</a>
        @endforeach
    @endcan
@else
    <a href="{{ route('login') }}"
        class="list-group-item list-group-item-action {{ Request::is('login') ? 'active' : '' }}">Login
        Page</a>
    <a href="{{ route('auth.register') }}"
        class="list-group-item list-group-item-action {{ Request::is('auth/register') ? 'active' : '' }}">Register
        Page</a>
@endauth
