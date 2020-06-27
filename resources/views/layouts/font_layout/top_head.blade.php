<!-- Top Bar -->
<div class="top_bar">
    <div class="top_bar_container">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="top_bar_content d-flex flex-row align-items-center justify-content-start">
                        <ul class="top_bar_contact_list">
                            <li><div class="question">Have any questions?</div></li>
                            <li>
                                <div>(009) 35475 6688933 32</div>
                            </li>
                            <li>
                                <div>info@elaerntemplate.com</div>
                            </li>
                        </ul>
                        <div class="top_bar_login ml-auto">
                            <ul>
                                <li><a href="{{ route('university.register') }}">Uni Register</a></li>

                                @guest
                                    <li><a href="{{url('login')}}">Login</a></li>
                                @else
                                    <li class="nav-item dropdown">
                                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>

                                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                            <a class="dropdown-item" href="{{ route('logout') }}"
                                               onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                {{ __('Logout') }}
                                            </a>

                                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                @csrf
                                            </form>
                                        </div>
                                    </li>
                                @endguest
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>