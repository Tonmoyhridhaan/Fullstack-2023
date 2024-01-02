<aside class="left-sidebar bg-sidebar">
  <div id="sidebar" class="sidebar sidebar-with-footer">
    <!-- Aplication Brand -->
    <div class="app-brand">
      <a href="dashboard.php" title="Sleek Dashboard">
        <svg
          class="brand-icon"
          xmlns="http://www.w3.org/2000/svg"
          preserveAspectRatio="xMidYMid"
          width="30"
          height="33"
          viewBox="0 0 30 33">
          <g fill="none" fill-rule="evenodd">
            <path class="logo-fill-blue" fill="#7DBCFF" d="M0 4v25l8 4V0zM22 4v25l8 4V0z" />
            <path class="logo-fill-white" fill="#FFF" d="M11 4v25l8 4V0z" />
          </g>
        </svg>

        <span class="brand-name text-truncate">Admin Dashboard</span>
      </a>
    </div>

    <!-- begin sidebar scrollbar -->
    <div class="" data-simplebar style="height: 100%;">
      <!-- sidebar menu -->
      <ul class="nav sidebar-inner" id="sidebar-menu">
        <li class="">
          <a class="" href="edit.php" >
            <i class="mdi mdi-view-dashboard-outline"></i>
            <span class="nav-text">Dashboard</span> <b class="caret"></b>
          </a>
        <!--
          <ul class="collapse show" id="dashboard" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li class="active">
                <a class="sidenav-item-link" href="index.html">
                  <span class="nav-text">Edit</span>
                </a>
              </li>

              <li class="">
                <a class="sidenav-item-link" href="analytics.html">
                  <span class="nav-text">P</span>
                </a>
              </li>
            </div>
          </ul>  -->
        </li>

        <li class="has-sub ">
          <a class="sidenav-item-link"  data-toggle="collapse" data-target="#app" >
            <i class="mdi mdi-pencil-box-multiple"></i>
            <span class="nav-text">CREATION</span> <b class="caret"></b>
          </a>

          <ul class="collapse " id="app" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li class="">
                <a class="sidenav-item-link" href="teacher.php">
                  <span class="nav-text">Create Teacher</span>
                </a>
              </li>

              <li class="">
                <a class="sidenav-item-link" href="student.php">
                  <span class="nav-text">Create Student</span>
                </a>
              </li>

            </div>
          </ul>
        </li>



        <li class="has-sub ">
          <a class="sidenav-item-link"  data-toggle="collapse" data-target="#app" >
            <i class="mdi mdi-pencil-box-multiple"></i>
            <span class="nav-text">VIEW</span> <b class="caret"></b>
          </a>

          <ul class="collapse " id="app" data-parent="#sidebar-menu">
            <div class="sub-menu">
              <li class="">
                <a class="sidenav-item-link" href="t_list.php">
                  <span class="nav-text">Teacher</span>
                </a>
              </li>

              <li class="">
                <a class="sidenav-item-link" href="s_list.php">
                  <span class="nav-text">Student</span>
                </a>
              </li>

            </div>
          </ul>
        </li>



      </ul>
    </div>
  </div>
</aside>
