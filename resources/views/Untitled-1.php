<div class="fixed top-0 right-0 hidden px-6 py-4 sm:block">
                            
                                <ul class="nav justify-content-end">
                                    <button class="btn btn-success dropdown-toggle" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                        <i class="fa fa-fw fa-user"></i>
                                        <span class="caret"></span>
                                    </button>

                                    <div class="">
                                        <li><a href="{{ url('/home') }}" class="nav-link" role="button">{{ Auth::user()->name }}</a></li>
                                        <li><a class="dropdown-item" href="{{ url('/plants') }}">Sell</a></li>
                                        <li class="dropdown-header">Products</li>
                                        <li><a class="dropdown-item" href="#">Plant</a></li>
                                        <li><a class="dropdown-item" href="#">Tools</a></li>
                                        <li>  
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>
                                        </li>  

                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                            @csrf
                                        </form>
                                    </div>
                                </ul>

                            @else
                                <ul class="navbar-nav">
                                    <li class="nav-item">
                                        <a href="{{ route('login') }}" class="nav-link">Login</a>
                                    </li>
                                    @if (Route::has('register'))
                                        <li class="nav-item">
                                            <a href="{{ route('register') }}" class="nav-link">Register</a>
                                        </li>
                                    @endif
                                </ul>
                            @endif
                        </div>
                    @endif
                </div>
            </div>