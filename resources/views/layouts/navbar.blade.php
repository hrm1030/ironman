<header>

        <div class="custom-container">

            <div class="d-flex justify-content-center mw-inherit">

                <nav id="mainnav" class="navbar navbar-expand-lg navbar-light">

                    <a class="navbar-brand" href="/"><img src="{{ url('assets/images/logo.png') }}" alt="RecruiterRater" title="RecruiterRater" /></a>

                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">

                    <span class="navbar-toggler-icon"></span>

                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">

                        <ul class="navbar-nav ml-auto">
                            @php
                                $current_route = Route::current();
                                $urls = explode('/', $current_route->uri);
                            @endphp
                            @foreach ($menus as $menu)

                                @if ($urls[0] == $menu['url'])
                                    @php
                                        $active = 'active';
                                    @endphp
                                @else
                                    @php
                                        $active = '';
                                    @endphp
                                @endif
                                @if (count($menu['children'])> 0)
                                    @if ($urls[1] == $menu['url'])
                                        @php
                                            $ch_active = 'active';
                                        @endphp
                                    @else
                                        @php
                                            $ch_active = '';
                                        @endphp
                                    @endif
                                    <li class="menu-item nav-item">
                                        <div class="dropdown show">
                                            <strong>
                                                <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    {{ $menu['name'] }}<i class="fas fa-angle-down pl-2"></i>
                                                </a>
                                            </strong>
                                            <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
                                                @foreach ($menu['children'] as $ch_menu)
                                                    <a class="dropdown-item py-2 {{ $ch_active }}" href="{{ url($menu['url'].'/'.$ch_menu->url) }}">{{ $ch_menu->name }}</a>
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                    </li>
                                @else
                                    <li class="menu-item nav-item">
                                        <strong>
                                            <a href="{{ url($menu['url'])}}" class="{{ $active }}">{{ $menu['name'] }}</a>
                                        </strong>
                                    </li>
                                @endif
                            @endforeach
                            @if (Auth::guest())
                                <li class="menu-item nav-item"><a href="{{url('/login')}}" class="btn btn-circle default blue-stripe">Login</a></li>

                                <li class="menu-item nav-item"><a href="{{url('/login')}}" class="btn btn-circle default red-stripe">Sign up</a></li>
                            @else
                                <li class="menu-item nav-item dropdown acc-details-nav">

                                    <a class="nav-link dropdown-toggle d-flex" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

                                        <img class="avatar-img m-0" src="assets/images/profile1.png" alt="avatar" title="avatar"><b class="align-self-center pl-2">{{ Auth::user()->name }}</b>

                                    </a>

                                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                        @if ($urls[0] == 'profile')
                                            @php
                                                $ch_active = 'active';
                                            @endphp
                                        @else
                                            @php
                                                $ch_active = '';
                                            @endphp
                                        @endif
                                        <a class="dropdown-item py-2 {{ $ch_active }}" href="{{url('/profile')}}">My settings</a>
                                        <form method="POST" action="{{ route('logout') }}">
                                        {{ csrf_field() }}
                                        <a class="dropdown-item py-2" href="route('logout')"
                                        onclick="event.preventDefault();
                                                    this.closest('form').submit();">Sign out</a>
                                        </form>
                                    </div>

                                </li>
                            @endif
                        </ul>

                    </div>

                </nav>

            </div>

        </div>

    </header>