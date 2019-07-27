<div class="header-logo-menu sticker">
    <div class="container">
        <div class="row">
            <div class="col-md-3 col-sm-12">
                <div class="logo">
                    <a href="{{ url('/') }}"><img style="height: 75px;" src="{{ asset('public/frontend/img/logo/logo.png') }}" alt="EDUCAT"></a>
                </div>
            </div>
            <div class="col-md-9 hidden-sm hidden-xs">
                <div class="mainmenu-area pull-right">
                    <div class="mainmenu">
                        <nav>
                            <ul id="nav">                                
                                <li class="current"><a href="{{ url('/') }}">Home</a></li>
                                <li><a href="{{ url('about') }}">About Us</a></li>
                            </ul>
                        </nav>
                    </div>
                    <ul class="header-search">
                        <li class="search-menu">
                            <i id="toggle-search" class="zmdi zmdi-search-for"></i>
                        </li>
                    </ul>
                    <!--Search Form-->
                    <div class="search">
                        <div class="search-form">
                            <form id="search-form" action="#">
                                <input type="search" placeholder="Search here..." name="search" />
                                <button type="submit">
                                    <span><i class="fa fa-search"></i></span>
                                </button>
                            </form>                                
                        </div>
                    </div>
                    <!--End of Search Form-->
                </div> 
            </div>
        </div>
    </div>
</div>  
<!-- Mobile Menu Area start -->
<div class="mobile-menu-area">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="mobile-menu">
                    <nav id="dropdown">
                        <ul>
                            <li class="current"><a href="{{ url('/') }}">Home</a></li>
                            <li><a href="{{ url('about') }}">About Us</a></li>
                        </ul>
                    </nav>
                </div>					
            </div>
        </div>
    </div>
</div>
<!-- Mobile Menu Area end -->