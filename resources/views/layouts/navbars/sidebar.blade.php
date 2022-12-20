<div class="sidebar" data-color="rose" data-background-color="black" data-image="{{ asset('images/panel.jpg') }}">
    <div class="logo flex items-center">
        <a href="#" class="logo-mini ">
            <img class="h-6 w-9" src="{{ asset('images/logo_light.png') }}" alt="">
        </a>
        <a href="{{ route('dashboard') }}" class="simple-text logo-normal">
            {{ __('G I M') }}
        </a>

    </div>
    <div class="sidebar-wrapper">
        <div class="user">
            <div class="photo">
               
            </div>
            <div class="user-info">
                <a data-toggle="collapse" href="#collapseExample" class="username">
                    <span>
                        {{ auth()->user()->name }}
                        <b class="caret"></b>
                    </span>
                </a>
                <div class="collapse" id="collapseExample">
                    <ul class="nav">
                        <li class="nav-item">
                            <a class="nav-link" href="#">

                                <span class="sidebar-mini">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>
                                <span class="sidebar-normal"> Mi Perfil </span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('logout') }}"
                                onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                <span class="sidebar-mini">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                                    </svg>
                                </span>
                                <span class="sidebar-normal">Cerrar sesión</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <ul class="nav">
            <li class="nav-item {{ $activePage == 'dashboard' ? ' active' : '' }}">

                <x-nav-link :href="route('dashboard')">
                    <i class="material-icons">space_dashboard</i>
                    <p>{{ __('Dashboard') }}</p>
                </x-nav-link>
            </li>
            <li class="nav-item {{ $menuParent == 'users' ? 'active' : '' }}">
                <a class="nav-link" data-toggle="collapse" href="#users" {{ ($menuParent=='Users' )
                    ? ' aria-expanded="true"' : '' }}>
                    <i class="material-icons">
                        manage_accounts
                    </i>
                    <p>{{ __('Usuarios') }}
                        <b class="caret"></b>
                    </p>
                </a>
                <div class="collapse {{ $menuParent == 'users' ? ' show' : '' }}" id="users">
                    <ul class="nav">
                        @can('manage-users', App\Models\User::class)
                        <x-nav-li :active="request()->routeIs('roles.index')">
                            <a class="nav-link" href="{{ route('roles.index') }}">
                                <span class="sidebar-mini">
                                    <i class="material-icons">
                                        diversity_3
                                    </i>
                                </span>
                                <span class="sidebar-normal"> {{ __('Roles') }} </span>
                            </a>
                        </x-nav-li>
                        <x-nav-li :active="request()->routeIs('user.index')">
                            <x-nav-link :href="route('user.index')">
                                <span class="sidebar-mini">
                                    <i class="material-icons">
                                        people
                                    </i>
                                </span>
                                <span class="sidebar-normal"> {{ __('Usuarios') }} </span>
                            </x-nav-link>
                        </x-nav-li>
                        <x-nav-li :active="request()->routeIs('departamentos.index')">
                            <x-nav-link :href="route('departamentos.index')">
                                <span class="sidebar-mini">
                                    <i class="material-icons">
                                        workspaces
                                    </i>
                                </span>
                                <span class="sidebar-normal"> {{ __('Departamentos') }} </span>
                            </x-nav-link>
                        </x-nav-li>

                        @endcan
                    </ul>
                </div>
            </li>
        </ul>
    </div>
</div>
