  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('dashboard')}}" class="brand-link">
      <img src="{{ asset('frontend/images/logo2.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      <span class="brand-text font-weight-light">BSM Education</span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">
      {{--  <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i class="fas fa-search fa-fw"></i>
            </button>
          </div>
        </div>
      </div>  --}}

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        @if(Auth::user()->role == '1')
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
           <li class="nav-item {{ (request()->is('admin/destination*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('admin/destination*')) ? 'active' : '' }}"> 
              <i class="nav-icon fa-solid fa-location-dot"></i>
              <p>
                Destinations
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item menu-open">
                <a href="{{ route('destination.index') }}" class="nav-link @yield('destination.index')">
                  <i class="far fa-circle nav-icon"></i>
                  Destination List
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ route('destination.create') }}" class="nav-link @yield('destination.create')">
                  <i class="far fa-circle nav-icon"></i>
                 Create Destinations
                </a>
              </li>
            </ul>
          </li>
          <li class="nav-item {{ (request()->is('admin/partners*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('admin/partners*')) ? 'active' : '' }}"> 
              <i class="nav-icon fa-solid fa-building-columns"></i>
              <p>
                Partner Institute
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
              <li class="nav-item menu-open">
                <a href="{{ route('partners.index') }}" class="nav-link @yield('partners.index')">
                  <i class="far fa-circle nav-icon"></i>
                  Partner Institute
                </a>
              </li>
              <li class="nav-item ">
                <a href="{{ route('partners.create') }}" class="nav-link @yield('partners.create')">
                  <i class="far fa-circle nav-icon"></i>
                 Create Partner Institute
                </a>
              </li>
            </ul>
          </li>
          
          <li class="nav-item {{ (request()->is('admin/blog*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('admin/blog*')) ? 'active' : '' }}">
              <i class="fa-solid fa-pen nav-icon"></i>
              <p>
                Blog
                <i class="right fas fa-angle-left "></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item menu-open">
                  <a href="{{ route('blog.index') }}" class="nav-link @yield('blog.index')">
                    <i class="far fa-circle nav-icon"></i>
                    Blog List
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="{{ route('blog.create') }}" class="nav-link @yield('blog.create')">
                    <i class="far fa-circle nav-icon"></i>
                  Create Blog
                  </a>
                </li>
              </ul>
          </li> 

          <li class="nav-item {{ (request()->is('admin/team*')) ? 'menu-open' : '' }}">
            <a href="#" class="nav-link {{ (request()->is('admin/team*')) ? 'active' : '' }}">
              <i class="fa fa-users  nav-icon" aria-hidden="true"></i>
              <p>
                Team
                <i class="right fas fa-angle-left"></i>
              </p>
            </a>
            <ul class="nav nav-treeview">
                <li class="nav-item menu-open">
                  <a href="{{ route('team.index') }}" class="nav-link @yield('team.index')">
                    <i class="far fa-circle nav-icon"></i>
                    Team List
                  </a>
                </li>
                <li class="nav-item ">
                  <a href="{{ route('team.create') }}" class="nav-link @yield('team.create')">
                    <i class="far fa-circle nav-icon"></i>
                  Create Team
                  </a>
                </li>
              </ul>
          </li> 

          <li class="nav-item ">
            <a href="{{ route('user.index') }}" class="nav-link @yield('user.index')">
              <i class="fa fa-user nav-icon" aria-hidden="true"></i>
              <p>
                User
              </p>
            </a>
          </li> 
 
          <li class="nav-item ">
            <a href="{{ route('contact_message.index') }}" class="nav-link @yield('contacr.index')">
              <i class="fa-sharp fa-regular fa-gear"></i>
              <p>
                Contact Message
              </p>
            </a>
          </li> 
          {{--  <li class="nav-item ">
            <a href="{{ route('generalsetting.index') }}" class="nav-link @yield('generalsetting')">
              <i class="fa-sharp fa-regular fa-gear"></i>
              <p>
                General Setting
              </p>
            </a>
          </li>  --}}
        </ul>
        @else

        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false"> 
          <li class="nav-item ">
            <a href="{{ route('survey.result') }}" class="nav-link @yield('survey.result')">
              <i class="fa fa-user nav-icon" aria-hidden="true"></i>
              <p>
                Qualification Report
              </p>
            </a>
          </li> 
        </ul>
        @endif
      </nav>
      <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
  </aside>