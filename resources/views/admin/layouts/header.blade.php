<header class="main-header">
    <a href="#" class="logo">
        <span class="logo-mini"><b>W</b>eb</span>
        <img src="{{asset('images/admin/logo.png')}}" style="width:150px;margin-left:-20px" class="user-image" alt="User Image">
    </a>
    <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <img src="{{asset('images/admin/touxiang.png')}}" style="" class="user-image" alt="User Image">
                        <span class="hidden-xs">后端用户</span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="user-header">
                            <p>
                                后端用户
                            </p>
                            <img src="{{ asset('images/admin/touxiang.png') }}" style="margin-left:90px;margin-top:20px" class="user-image" alt="User Image">
                        </li>

                        <li class="user-footer" style="text-align:center">
                            <div class="pull-right">
                                <a href="{{ url('/admin/exit') }}" class="btn btn-default btn-flat">退出</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>