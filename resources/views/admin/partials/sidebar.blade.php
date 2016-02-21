<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <!-- Optionally, you can add icons to the links -->

            <li class="header">Games</li>
            <li class="treeview">
                <a href="#"><span>Genres</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @if (Request::is('admin/category*')) class="active" @endif> <a href="{{ URL::route('admin.categories.index') }}">List Genres</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span>Games</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @if (Request::is('admin/game*')) class="active" @endif> <a href="{{ URL::route('admin.games.index') }}">List Games</a></li>
                </ul>
            </li>

            <li class="header">Developers & Publishers</li>
            <li class="treeview">
                <a href="#"><span>Developers</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @if (Request::is('admin/category*')) class="active" @endif> <a href="{{ URL::route('admin.categories.index') }}">List Developers</a></li>
                </ul>
            </li>
            <li class="treeview">
                <a href="#"><span>Publishers</span> <i class="fa fa-angle-left pull-right"></i></a>
                <ul class="treeview-menu">
                    <li @if (Request::is('admin/game*')) class="active" @endif> <a href="{{ URL::route('admin.games.index') }}">Publishers</a></li>
                </ul>
            </li>



        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>