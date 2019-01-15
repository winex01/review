  <!-- Left side column. contains the sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">MAIN NAVIGATION</li>

        <li class="{{ active(['home', 'project/*', 'not:project/create']) }}">
            <a href="{{ route('home') }}"><i class="fa fa-home"></i> <span>{{ __('Home') }}</span></a>
        </li>

        <li>
            <a href="https://adminlte.io/docs"><i class="fa fa-fire"></i> <span>Trending</span></a>
        </li>

        <li class="{{ active('project.create') }}">
            <a href="{{ route('project.create') }}"><i class="fa fa-upload"></i> <span>{{ __('Submit Code') }}</span></a>
        </li>

        <li class="header">PROGRAMMING</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
      </ul>
    </section>
    <!-- /.sidebar -->
  </aside>