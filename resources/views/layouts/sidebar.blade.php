  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
      <!-- search form -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
                <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
                </button>
              </span>
        </div>
      </form>
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li>
          <a href="{{ URL::route('dashboard') }}">
          <i class="fa fa-dashboard"></i> <span>Home</span>
          </a>
        </li>
        <!-- <li class="active treeview">
          <a href="{{ URL::route('dashboard') }}">
            <i class="fa fa-dashboard"></i> <span>Dashboard</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li class="active"><a href="index.html"><i class="fa fa-circle-o"></i> Dashboard v1</a></li>
            <li><a href="index2.html"><i class="fa fa-circle-o"></i> Dashboard v2</a></li>
          </ul>
        </li> -->
        @if(Auth::user()->privilege=='1')
        <li>
          <a href="{{ URL::route('dashboard') }}">
          <i class="fa fa-user"></i> <span>Management User</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-pie-chart"></i>
            <span>Kelola Siswa</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::route('datasiswa') }}"><i class="fa fa-circle-o"></i> Data Siswa</a></li>
            <li><a href="pages/charts/morris.html"><i class="fa fa-circle-o"></i> Absensi Siswa</a></li>
            <li><a href="pages/charts/flot.html"><i class="fa fa-circle-o"></i> Nilai Siswa</a></li>
          </ul>
        </li>
        <li>
          <a href="{{ URL::route('dataguru') }}">
          <i class="fa fa-laptop"></i> <span>Kelola Guru</span>
          </a>
        </li>
        <li>
          <a href="{{ URL::route('datawali') }}">
          <i class="fa fa-share"></i> <span>Kelola Wali Murid</span>
          </a>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-edit"></i> <span>Mata Pelajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="{{ URL::route('datamapel1') }}"><i class="fa fa-circle-o"></i> Pelajaran Kelas I</a></li>
            <li><a href="{{ URL::route('datamapel2') }}"><i class="fa fa-circle-o"></i> Pelajaran Kelas II</a></li>
            <li><a href="{{ URL::route('datamapel3') }}"><i class="fa fa-circle-o"></i> Pelajaran Kelas III</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-table"></i> <span>Ruang Kelas</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Kelas I</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Kelas II</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Kelas III</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#">
            <i class="fa fa-book"></i> <span>Jadwal Pelajaran</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="pages/tables/simple.html"><i class="fa fa-circle-o"></i> Kelas I</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Kelas II</a></li>
            <li><a href="pages/tables/data.html"><i class="fa fa-circle-o"></i> Kelas III</a></li>
          </ul>
        </li>
        <li>
          <a href="pages/calendar.html">
            <i class="fa fa-calendar"></i> <span>Pengumuman</span>
            <span class="pull-right-container">
              <small class="label pull-right bg-red">3</small>
              <small class="label pull-right bg-blue">17</small>
            </span>
          </a>
        </li>
        <li class="header">LABELS</li>
        <li><a href="#"><i class="fa fa-circle-o text-red"></i> <span>Important</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-yellow"></i> <span>Warning</span></a></li>
        <li><a href="#"><i class="fa fa-circle-o text-aqua"></i> <span>Information</span></a></li>
        @endif
      </ul>
    </section>
    <!-- /.sidebar -->
</aside>
