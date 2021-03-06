@inject('request', 'Illuminate\Http\Request')
<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <ul class="sidebar-menu">

            <li class="{{ $request->segment(1) == 'home' ? 'active' : '' }}">
                <a href="{{ url('/') }}">
                    <i class="fa fa-wrench"></i>
                    <span class="title">Dashboard</span>
                </a>
            </li>

            
           
            <li class="treeview">
                <a href="">
                    <i class="fa fa-users"></i>
                    <span class="title">User management</span>
                    <span class="pull-right-container">
                        <i class="fa fa-angle-left pull-right"></i>
                    </span>
                </a>
                <ul class="treeview-menu">

                <li class="{{ $request->segment(2) == 'users' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.users.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                Users
                            </span>
                        </a>
                </li>
            
                <li class="{{ $request->segment(2) == 'roles' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.roles.index') }}">
                            <i class="fa fa-briefcase"></i>
                            <span class="title">
                                Roles
                            </span>
                        </a>
                </li>
               
                <li class="{{ $request->segment(2) == 'permissions' ? 'active active-sub' : '' }}">
                        <a href="{{ route('admin.permissions.index') }}">
                            <i class="fa fa-user"></i>
                            <span class="title">
                                Permissions
                            </span>
                        </a>
                </li>
           
                </ul>
            </li>
          
            <li class="{{ $request->segment(2) == 'tournaments' ? 'active' : '' }}">
                <a href="{{ route('admin.tournaments.index') }}">
                    <i class="fa fa-gears"></i>
                    <span class="title">Tournament</span>
                </a>
            </li>

            <li class="{{ $request->segment(2) == 'schedules' ? 'active' : '' }}">
                <a href="{{ route('admin.schedules.index') }}">
                    <i class="fa fa-user"></i>
                    <span class="title">Schedules</span>
                </a>
            </li>

            <li class="{{ $request->segment(2) == 'matches' ? 'active' : '' }}">
                <a href="{{ route('admin.matches.index') }}">
                    <i class="fa fa-user"></i>
                    <span class="title">Matches</span>
                </a>
            </li>
            
           
            <li class="{{ $request->segment(2) == 'players' ? 'active' : '' }}">
                <a href="{{ route('admin.players.index') }}">
                    <i class="fa fa-user"></i>
                    <span class="title">Players</span>
                </a>
            </li>
        
            <li class="{{ $request->segment(2) == 'results' ? 'active' : '' }}">
                <a href="{{ route('admin.results.index') }}">
                    <i class="fa fa-soccer-ball-o"></i>
                    <span class="title">Results</span>
                </a>
            </li>
           
            <li class="{{ $request->segment(1) == 'change_password' ? 'active' : '' }}">
                <a href="#">
                    <i class="fa fa-key"></i>
                    <span class="title">Change password</span>
                </a>
            </li>

            <li>
                <a href="#logout" onclick="$('#logout').submit();">
                    <i class="fa fa-arrow-left"></i>
                    <span class="title">logout</span>
                </a>
            </li>
        </ul>
    </section>
</aside>
{!! Form::open(['route' => 'logout', 'style' => 'display:none;', 'id' => 'logout']) !!}
<button type="submit">logout</button>
{!! Form::close() !!}
