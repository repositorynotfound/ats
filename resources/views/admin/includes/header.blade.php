<nav class="navbar navbar-default navbar-static-top m-b-0">
    <div class="navbar-header"> 
        <a class="navbar-toggle hidden-sm hidden-md hidden-lg " href="javascript:void(0)" data-toggle="collapse" data-target=".navbar-collapse"><i class="ti-menu"></i>
        </a>
        <div class="top-left-part" style="display:none;">
            <a class="logo" href="index.html"><b><img src="{{ asset('theme/plugins/images/eliteadmin-logo.png')}}" alt="home" /></b><span class="hidden-xs"><strong>elite</strong>hospital</span></a>
        </div>
        <ul class="nav navbar-top-links navbar-left hidden-xs">
            <li>
                <a href="javascript:void(0)" class="open-close hidden-xs waves-effect waves-light"><i class="icon-arrow-left-circle ti-menu"></i></a>
            </li>
            <li>
                <form role="search" class="app-search hidden-xs" method="POST" action="{{ route('search') }}">  
                    @csrf
                    <input type="text" placeholder="Search..." class="form-control"> <a href=""><i class="fa fa-search"></i></a> 
                </form>
            </li>
        </ul>
    </div>
            <!-- /.navbar-header -->
            <!-- /.navbar-top-links -->
            <!-- /.navbar-static-side -->
</nav>