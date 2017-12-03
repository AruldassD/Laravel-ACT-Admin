
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- Sidebar user panel -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="{{URL::asset('/img/avatar5.png')}}" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p>{{{ Auth::user()->name  }}}</p>
          <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
        </div>
      </div>
     
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      @if(Auth::user()->role == 'ADM')
      
        
        <li class="treeview">
          <a href="#">
            <i class="fa fa-users"></i> <span>Employees</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ route('register') }}"><i class="fa fa-circle-o"></i>Add</a></li>
            <li class="active"><a href="{{ url('users') }}"><i class="fa fa-circle-o"></i>View</a></li>
          </ul>
        </li>
		 <li class="treeview">
          <a href="#">
            <i class="fa fa-male"></i> <span>Customers</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ url('customers/create') }}"><i class="fa fa-circle-o"></i>Add</a></li>
            <li class="active"><a href="{{ url('customers') }}"><i class="fa fa-circle-o"></i>View</a></li>
          </ul>
        </li>
       <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Reports</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
           <ul class="treeview-menu">
            <li><a href="{{ url('reports') }}"><i class="fa fa-circle-o"></i>View</a></li>
          </ul>
        </li>
		     @endif
         <li class="treeview">
            <a href="{{ url('/getPassword') }}"><i class="fa fa-unlock"></i><span>Change Password</span></a>
          </li>
        <li class="treeview">
           <a href="{{ url('/logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"> <i class="fa fa-lock"></i> <span>Logout</span> </a>
               <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
           {{ csrf_field() }}
         </form>
      </li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>
