<nav class="navbar navbar-expand-lg navbar-light bg-faded">
        <div class="container-fluid">
          <div class="navbar-header">
          
             
              <p class="d-none">cart</p></a>
         
          </div>
          <div class="navbar-container">
            <div id="navbarSupportedContent" class="collapse navbar-collapse">
              <ul class="navbar-nav">
                <li class="nav-item mt-1 navbar-search text-left dropdown"><a id="search" href="#" data-toggle="dropdown" class="nav-link dropdown-toggle"><i class="ft-search blue-grey darken-4"></i></a>
                  <div aria-labelledby="search" class="search dropdown-menu dropdown-menu-right">
                    <div class="arrow_box_right">
                      <form role="search" class="navbar-form navbar-right">
                        <div class="position-relative has-icon-right mb-0">
                          <input id="navbar-search" type="text" placeholder="Search" class="form-control"/>
                          <div class="form-control-position navbar-search-close"><i class="ft-x"></i></div>
                        </div>
                      </form>
                    </div>
                  </div>
                </li>
        
             
             
                <li class="dropdown nav-item mr-0"><a id="dropdownBasic3" href="#" data-toggle="dropdown" class="nav-link position-relative dropdown-user-link dropdown-toggle"><span class="avatar avatar-online"><img id="navbar-avatar" src="{{url('backend/img/portrait/small/avatar-s-3.jpg')}}" alt="avatar"/></span>
                    <p class="d-none">User Settings</p></a>
                  <div aria-labelledby="dropdownBasic3" class="dropdown-menu dropdown-menu-right">
                    <div class="arrow_box_right"><a href="user-profile-page.html" class="dropdown-item py-1"><i class="ft-edit mr-2"></i><span>My Profile</span></a><a href="{{route('admin.chatApps')}}" class="dropdown-item py-1"><i class="ft-message-circle mr-2"></i><span>My Chat</span></a><a href="javascript:;" class="dropdown-item py-1"><i class="ft-settings mr-2"></i><span>Settings</span></a>
                      <div class="dropdown-divider"></div>
                      <a href="javascript:;" class="dropdown-item"  onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                        <i class="ft-power mr-2"></i><span>Logout</span>
                      </a>

                      <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                      </form>



                    </div>
                  </div>
                </li>
              </ul>
            </div>
          </div>
        </div>
      </nav>