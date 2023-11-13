<header class="header-area header-sticky wow slideInDown" data-wow-duration="0.75s" data-wow-delay="0s">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav class="main-nav">
                    <a href="" class="logo">
                        <img src="logo_text_right.png" style="width: 200px">
                    </a>

                    <ul class="nav">
                        <li class=""><a href="/" class="{{ Request::is('/') ? 'active' : '' }}">Home</a>
                        </li>
                        <li class=""><a href="/pricing"
                                class="{{ Request::is('pricing') ? 'active' : '' }}">Pricing</a>
                        </li>
                        <li class=""><a href="/past_projects"
                                class="{{ Request::is('past_projects') ? 'active' : '' }}">Past
                                Projects</a></li>
                        {{-- <li class=""><a href="/about_us">About Us</a></li> --}}
                        <li>
                            <div class="gradient-button"><a id="" href=""><i
                                        class="fa fa-sign-in-alt"></i> Sign In</a></div>
                        </li>
                    </ul>

                    <a class='menu-trigger'>
                        <span>Menu</span>
                    </a>
                </nav>
            </div>
        </div>
    </div>
</header>
