   <!--* Nav Bar -->
            <header id="master-head" class="navbar menu-absolute menu-center">
                <div class="container">
                    <div id="main-logo" class="logo-container">
                        <a class="logo" href="/">
                            <img src="{{ asset('/') }}frontend/assets/images/d-code-logo-dark.svg" class="logo-dark img-fluid" alt="DCode">
                            <img src="{{ asset('/') }}frontend/assets/images/d-code-logo-light.svg" class="logo-light img-fluid" alt="DCode">
                        </a>
                    </div>
                    <div class="menu-toggle-btn">
                        <!--* Mobile menu toggle-->
                        <a class="navbar-toggle">
                            <div class="burger-lines">
                            </div>
                        </a>
                        <!--* End mobile menu toggle-->
                    </div>
                    <div id="navigation" class="nav navbar-nav navbar-main">
                        <ul id="main-menu" class="menu-primary">
                        <li class="menu-item {{ Request::is('/') ? 'active' : '' }}">
                            <a href="/">Home</a>
                        </li>
                         <li class="menu-item {{ Request::is('abouts')  ? 'active' : '' }}">
                            <a href="{{ route('abouts') }}">About Us</a>
                        </li>
                          <li class="menu-item {{ Request::is('ser') ? 'active' : '' }}">
                                        <a href="{{ route('ser') }}">Services</a>
                                    </li>
                                        <li class="menu-item {{ Request::is('cer') ? 'active' : '' }}">
                                        <a href="{{ route('cer') }}">Careers</a>
                                    </li>

                                           <li class="menu-item {{ Request::is('com') ? 'active' : '' }}">
                                        <a href="{{ route('com') }}">Contact Us</a>
                                    </li>
                        </ul>
                    </div>
                    <div class="navbar-right">
                        <div class="menu-button">
                            <a href="{{ route('login') }}" target="_blank">
                                <div class="btn btn-primary">sign in</div>
                            </a>
                        </div>
                    </div>
                </div>
            </header>
            <!--* Nav Bar -->