@if($logged_in_user->isStudent())
<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu"></i>
            </a>
            <a href="{{ url('/admin/dashboard') }}">
                <img class="img-fluid" src="{{url('img/nav-old-logo2.png')}}" width="150px" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li>
                    <a href="https://www.ncmc.edu.ph" target="_blank"><i class="fa fa-globe"></i>&nbsp; NCMC Website</a>
                </li>
            </ul>
            <ul class="nav-right">
                <li class="header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <i class="feather icon-bell"></i>
                            <span class="badge bg-c-pink">5</span>
                        </div>
                        <ul class="show-notification notification-view dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            <li>
                                <h6>Notifications</h6>
                                <label class="label label-danger">New</label>
                            </li>
                            
                        </ul>
                    </div>
                </li>
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ $logged_in_user->picture }}" class="img-radius" alt="User-Profile-Image">
                            <span>{{ $logged_in_user->fullname }}</span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            
                            <li>
                                <a href="{{ route('student.settings') }}">
                                    <i class="feather icon-settings"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="{{ route('student.profile') }}">
                                    <i class="feather icon-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('logout') }}">
                                    <i class="feather icon-log-out"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
@else
<nav class="navbar header-navbar pcoded-header">
    <div class="navbar-wrapper">
        <div class="navbar-logo">
            <a class="mobile-menu" id="mobile-collapse" href="#!">
                <i class="feather icon-menu"></i>
            </a>
            <a href="{{ url('/admin/dashboard') }}">
                <img class="img-fluid" src="{{url('img/nav-old-logo2.png')}}" width="150px" alt="Theme-Logo" />
            </a>
            <a class="mobile-options">
                <i class="feather icon-more-horizontal"></i>
            </a>
        </div>
        <div class="navbar-container container-fluid">
            <ul class="nav-left">
                <li style="position: absolute;">
                    <form id="search_student" method="GET" class="form__student" action="{!! route('students.search') !!}" role="search">
                        <!-- <div class="md-form active-cyan-2 form-inline" style="margin-bottom: 0; margin-top: 10px;">
                            <input class="form-control" name="id_no" type="text" placeholder="Search Student" form="search_student" style="width: 18em">
                            <button type="submit" class="btn btn-md" form="search_student"><i class="fa fa-search"></i></button> 
                        </div> -->

                        <div class="input-group" id="adv-search" style="margin-top: 10px">
                            <input type="text" class="form-control get" name="keyword" placeholder="Search Student" autocomplete="off" form="search_student"/>
                            <div class="input-group-btn">
                                <div class="btn-group" role="group">
                                    <button type="submit" class="btn btn-primary" form="search_student"><span class="fa fa-search" aria-hidden="true"></span></button>
                                </div>
                            </div>
                        </div>
                    </form>

                    <div class="hide" style="display: none;">
                        <div class="card search__rslt m-b-0">
                            <table class="table table-xxs table__result m-b-0">
                                <thead>
                                    <!-- <tr>
                                        <td>ID NO</td>
                                        <td>First Name</td>
                                        <td>Last Name</td>
                                    </tr> -->
                                    <tr>
                                        <div class="alert closed alert--flat m-b-0">
                                            <span class="msg"></span>
                                        </div>
                                    </tr>
                                </thead>
                                <tbody>
                                    
                                </tbody>
                            </table>   
                            <div class="text-center">
                                <span class="loading closed"><i class="fa fa-spinner fa-spin fa-3x fa-fw"></i></span>
                            </div>                         
                        </div>                   
                    </div>
                </li>
            </ul>
            <ul class="nav-right">
                <li>
                    <!-- <a href="#!" data-toggle="modal" data-target="#navEnrolment" class="btn btn-lg btn-primary" style="color: #fff;"><i class="fa fa-address-book-o"></i>&nbsp; Manage Enrolment</a> -->
                    <a href="#!" id="confirm_button" class="btn btn-lg btn-primary b-radius-5" style="color: #fff;"><i class="fa fa-graduation-cap"></i>&nbsp; Add Student</a>
                </li>
                <li class="user-profile header-notification">
                    <div class="dropdown-primary dropdown">
                        <div class="dropdown-toggle" data-toggle="dropdown">
                            <img src="{{ $logged_in_user->picture }}" class="img-radius" alt="User-Profile-Image">
                            <span>{{ $logged_in_user->fullname }}</span>
                            <i class="feather icon-chevron-down"></i>
                        </div>
                        <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                            
                            <li>
                                <a href="#!">
                                    <i class="feather icon-settings"></i> Settings
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('account') }}">
                                    <i class="feather icon-user"></i> Profile
                                </a>
                            </li>
                            <li>
                                <a href="{{ url('logout') }}">
                                    <i class="feather icon-log-out"></i> Logout
                                </a>
                            </li>
                        </ul>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>
@endif