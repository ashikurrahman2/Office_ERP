<header id="header-container" class="db-top-header">
    <!-- Header -->
    <div id="header">
        <div class="container-fluid">
            <!-- Left Side Content -->
            <div class="left-side">
                <!-- Logo -->
                <div id="logo">
                    <a href="/"><img src="{{ asset('/') }}users/assets/images/logo.svg" alt=""></a>
                </div>
                <!-- Mobile Navigation -->
                <div class="mmenu-trigger">
                    <button class="hamburger hamburger--collapse" type="button">
                        <span class="hamburger-box">
                <span class="hamburger-inner"></span>
                        </span>
                    </button>
                </div>
                <!-- Main Navigation -->
                <nav id="navigation" class="style-1">
                    <ul id="responsive">
                        <li><a href="/">হোম</a></li>
                    </ul>
                </nav>
                <div class="clearfix"></div>
                <!-- Main Navigation / End -->
            </div>
            <!-- Left Side Content / End -->
            <!-- Right Side Content / -->
            <div class="header-user-menu user-menu">
                <div class="header-user-name">
                    <span>
                        @if (Auth::user()->user_image)
                            <img src="{{ asset(Auth::user()->user_image) }}" alt="{{ Auth::user()->name }}">
                        @endif
                    </span>
                    {{ Auth::user()->name }}
                </div>
                <ul>
                    <li><a href="{{ route('profile.index') }}">প্রোফাইল</a></li>
                    {{-- <li><a href="{{ route('property.create') }}"> সম্পত্তি/জমি যোগ করুন</a></li> --}}
                    <!--<li><a href=""> পাসওয়ার্ড পরিবর্তন </a></li>-->
                    <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                           লগ আউট
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                    </li>
                </ul>
            </div>
            <!-- Right Side Content / End -->
        </div>
    </div>
    <!-- Header / End -->
</header>



