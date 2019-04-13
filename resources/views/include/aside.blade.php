<aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{{asset('public/dist/img/user2-160x160.jpg')}}" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
                <p>Alexander Pierce</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>

        <!-- sidebar menu: : style can be found in sidebar.less -->
        <ul class="sidebar-menu" data-widget="tree">
            <li class="{{ (Request::is('/') ? 'active' : '') }}">
                <a href="{{route('dashboard')}}"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
            </li>

            <li class="treeview {{ (Request::is('sales/*') ? 'active' : '') }}">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Sales</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li class="{{ (Request::is('sales/new') ? 'active' : '') }}"><a href="{{route('sales')}}"><i class="fa fa-circle-o"></i> New Sales</a></li>
                    <li class="{{ (Request::is('sales/invoice') ? 'active' : '') }}"><a href="{{route('sales_invoice')}}"><i class="fa fa-circle-o"></i> Sales Invoice</a></li>
                    <li class="{{ (Request::is('sales/ledger') ? 'active' : '') }}"><a href="{{route('sales_ledger')}}"><i class="fa fa-circle-o"></i> Sales Ledger</a></li>
                    <li class="{{ (Request::is('sales/due') ? 'active' : '') }}"><a href="{{route('sales_due')}}"><i class="fa fa-circle-o"></i> Sales Due</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Purchase</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> New Purchase</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Purchase Invoice</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Purchase Ledger</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Purchase Due</a></li>
                </ul>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Other</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Income</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Expanse</a></li>
                </ul>
            </li>

            <li>
                <a href="#"><i class="fa fa-dashboard"></i> <span>Stock</span></a>
            </li>

            <li>
                <a href="#"><i class="fa fa-dashboard"></i> <span>Product</span></a>
            </li>

            <li>
                <a href="#"><i class="fa fa-dashboard"></i> <span>Customer</span></a>
            </li>

            <li>
                <a href="#"><i class="fa fa-dashboard"></i> <span>Supplier</span></a>
            </li>

            <li>
                <a href="#"><i class="fa fa-dashboard"></i> <span>Balance</span></a>
            </li>

            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Users</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> New User</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> User Role</a></li>
                </ul>
            </li>


            <li class="treeview">
                <a href="#">
                    <i class="fa fa-table"></i> <span>Reports</span>
                    <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
                </a>
                <ul class="treeview-menu">
                    <li><a href="#"><i class="fa fa-circle-o"></i> Sales Reports</a></li>
                    <li><a href="#"><i class="fa fa-circle-o"></i> Purchase Reports</a></li>
                </ul>
            </li>

        </ul>
    </section>
    <!-- /.sidebar -->
</aside>