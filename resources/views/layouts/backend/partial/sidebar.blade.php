<div data-active-color="white" data-background-color="black" data-image="../app-assets/img/sidebar-bg/01.jpg" class="app-sidebar">
        <div class="sidebar-header">
          <div class="logo clearfix"><a href="index-2.html" class="logo-text float-left">
              <div class="logo-img"><img src="{{url('backend/img/logo.png')}}" alt="Convex Logo"/></div><span class="text align-middle">CONVEX</span></a><a id="sidebarToggle" href="javascript:;" class="nav-toggle d-none d-sm-none d-md-none d-lg-block"><i data-toggle="expanded" class="ft-disc toggle-icon"></i></a><a id="sidebarClose" href="javascript:;" class="nav-close d-block d-md-block d-lg-none d-xl-none"><i class="ft-circle"></i></a></div>
        </div>
        <div class="sidebar-content">
          <div class="nav-container">
            <ul id="main-menu-navigation" data-menu="menu-navigation" class="navigation navigation-main">
              <li class="{{Request::is('admin/dashboard') ? 'active' : ''}}"><a href="{{route('admin.dashboard')}}"><i class="icon-home"></i><span data-i18n="" class="menu-title">Dashboard</span><span class="tag badge badge-pill badge-danger mt-1"></span></a>
              
              </li>
              <li class="has-sub nav-item"><a href="#"><i class="icon-screen-desktop"></i><span data-i18n="" class="menu-title">Apps</span></a>
                <ul class="menu-content">
                  <li ><a href="" class="menu-item">Course</a>
                  </li>
                  <li><a href="taskboard.html" class="menu-item">Taskboard</a>
                  </li>
                  <li><a href="calendar.html" class="menu-item">Calendar</a>
                  </li>
                </ul>
              </li>

              <li class="{{Request::is('admin/course*') ? 'active' : ''}}"><a href="{{route('admin.course.index')}}"><i class="fa fa-book" aria-hidden="true"></i><span data-i18n="" class="menu-title">Course</span></a>
              </li>
                <li class="{{Request::is('admin/batch*') ? 'active' : ''}}"><a href="{{route('admin.batch.index')}}"><i class="fa fa-book" aria-hidden="true"></i><span data-i18n="" class="menu-title">Batch</span></a>
                </li>
                <li class="{{Request::is('admin/student*') ? 'active' : ''}}"><a href="{{route('admin.student.index')}}"><i class="fa fa-users" aria-hidden="true"></i><span data-i18n="" class="menu-title">Student's</span></a>
                </li>



                <li class="has-sub nav-item"><a href="#"><i class="icon-screen-desktop"></i><span data-i18n="" class="menu-title">Investor</span></a>
                    <ul class="menu-content">
                        <li ><a href="{{route('admin.investment.create')}}" class="menu-item">Add Investor</a></li>
                        <li><a href="{{route('admin.investment.index')}}" class="menu-item">All Investor</a></li>
                    </ul>
                </li>




                <li class="has-sub nav-item"><a href="#"><i class="icon-screen-desktop"></i><span data-i18n="" class="menu-title">Project</span></a>
                    <ul class="menu-content">
                        <li ><a href="{{route('admin.project.create')}}" class="menu-item">Add Project</a></li>
                        <li><a href="{{route('admin.project.index')}}" class="menu-item">All Project</a></li>
                    </ul>
                </li>



                <li class="has-sub nav-item"><a href="#"><i class="icon-screen-desktop"></i><span data-i18n="" class="menu-title">Testimonial</span></a>
                    <ul class="menu-content">
                        <li ><a href="{{route('admin.testimonial.create')}}" class="menu-item">Add Testimonial</a></li>
                        <li><a href="{{route('admin.testimonial.index')}}" class="menu-item">All Testimonial</a></li>
                    </ul>
                </li>







            </ul>
          </div>
        </div>
        <div class="sidebar-background"></div>
      </div>