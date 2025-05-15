<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="{{route('admin.index')}}" class="brand-link">
      <img src="{{asset('upload/images')}}/logo3.jpeg" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8; margin-left:0">
      <span class="brand-text font-weight-bold">Magnagement</span>
    </a>
<div class="sidebar">
    <!-- Sidebar user panel (optional) -->
    <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <div class="image">
        <img src="{{asset('upload/images')}}/{{Auth::user()->gender == 1 ? 'male.png' : 'female.png'}}" class="img-circle elevation-2" alt="User Image">
      </div>
      <div class="info">
        <a href="#" class="d-block">{{Auth::user()->name}}</a>
      </div>
    </div>

    <!-- SidebarSearch Form -->
    <div class="form-inline">
      <div class="input-group" data-widget="sidebar-search">
        <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
        <div class="input-group-append">
          <button class="btn btn-sidebar">
            <i class="fas fa-search fa-fw"></i>
          </button>
        </div>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <nav class="mt-2">
      <ul class="nav nav-pills nav-sidebar flex-column nav-child-indent" data-widget="treeview" role="menu" data-accordion="false">
        <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
        <li class="nav-item {{Request::segment(2) == 'category' ? 'menu-is-opening menu-open' : ''}}">
          <a href="" class="nav-link">
            <i class="fa-solid fa-layer-group"></i>
            <p>
              Categories
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('category.index')}}" class="nav-link">
                <i class="fa-sharp-duotone fa-solid fa-list"></i>
                <p>List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('category.create')}}" class="nav-link">
                <i class="fa-solid fa-folder-plus"></i>
                <p>Create</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item {{Request::segment(2) == 'application' ? 'menu-is-opening menu-open' : ''}}">
          <a href="" class="nav-link">
            <i class="fa-solid fa-layer-group"></i>
            <p>
              Applications
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('application.index')}}" class="nav-link">
                <i class="fa-sharp-duotone fa-solid fa-list"></i>
                <p>List</p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{route('job.create')}}" class="nav-link">
                <i class="fa-solid fa-folder-plus"></i>
                <p>Create</p>
              </a>
            </li> --}}
          </ul>
        </li>
        <li class="nav-item {{Request::segment(2) == 'job' ? 'menu-is-opening menu-open' : ''}}">
          <a href="" class="nav-link">
            <i class="fa-solid fa-layer-group"></i>
            <p>
              Jobs
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('job.index')}}" class="nav-link">
                <i class="fa-sharp-duotone fa-solid fa-list"></i>
                <p>List</p>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a href="{{route('job.create')}}" class="nav-link">
                <i class="fa-solid fa-folder-plus"></i>
                <p>Create</p>
              </a>
            </li> --}}
          </ul>
        </li>
        <li class="nav-item {{Request::segment(2) == 'new' ? 'menu-is-opening menu-open' : ''}}">
          <a href="" class="nav-link">
            <i class="fa-solid fa-layer-group"></i>
            <p>
              News
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('new.index')}}" class="nav-link">
                <i class="fa-sharp-duotone fa-solid fa-list"></i>
                <p>List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('new.create')}}" class="nav-link">
                <i class="fa-solid fa-folder-plus"></i>
                <p>Create</p>
              </a>
            </li>
          </ul>
        </li>
        <li class="nav-item {{Request::segment(2) == 'user' ? 'menu-is-opening menu-open' : ''}}">
          <a href="" class="nav-link">
            <i class="fa-solid fa-layer-group"></i>
            <p>
              Users
              <i class="right fas fa-angle-left"></i>
            </p>
          </a>
          <ul class="nav nav-treeview">
            <li class="nav-item">
              <a href="{{route('user.index')}}" class="nav-link">
                <i class="fa-sharp-duotone fa-solid fa-list"></i>
                <p>List</p>
              </a>
            </li>
            <li class="nav-item">
              <a href="{{route('job.create')}}" class="nav-link">
                <i class="fa-solid fa-folder-plus"></i>
                <p>Create</p>
              </a>
            </li>
          </ul>
        </li>
        
      </ul>
      
    </nav>
    <!-- /.sidebar-menu -->
  </div>
  {{--  --}}