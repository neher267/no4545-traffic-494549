<div class="col-md-3 left_col menu_fixed">
    <div class="left_col scroll-view">
        <div class="navbar nav_title" style="border: 0;">
            <a href="{{url('/')}}" class="site_title" target="_blank"><i class="fa fa-paw"></i> <span>{{config('app.name')}}</span></a>
        </div>

        <div class="clearfix"></div>       

        <br />

        <!-- sidebar menu -->
        <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
            <div class="menu_section">                
                <ul class="nav side-menu">
                    <li><a href="{{url('dashboard')}}"><i class="fa fa-home"></i>Home</a></li>   
                                     
                    <li><a><i class="fa fa-cogs"></i> Settings <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="{{route('routes.index')}}">Routes</a></li>                          
                            <li><a href="{{route('nodes.index')}}">Nodes</a></li>                          
                            <!-- <li><a href="{{route('users')}}">Users</a></li> -->
                        </ul>
                    </li> 
                </ul>
            </div>            
        </div>
        <!-- /sidebar menu -->

        <!-- /menu footer buttons -->
        <div class="sidebar-footer hidden-small">         

            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                document.getElementById('logout-form').submit();">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
        </div>
        <!-- /menu footer buttons -->
    </div>
</div>