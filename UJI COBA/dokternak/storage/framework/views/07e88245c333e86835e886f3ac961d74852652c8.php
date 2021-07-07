<aside class="sidebar-left border-right bg-white shadow" id="leftSidebar" data-simplebar>
        <a href="#" class="btn collapseSidebar toggle-btn d-lg-none text-muted ml-2 mt-3" data-toggle="toggle">
          <i class="fe fe-x"><span class="sr-only"></span></i>
        </a>
        <nav class="vertnav navbar navbar-light">
          <!-- nav bar -->
          <div class="w-100 mb-4 d-flex">
            <a class="navbar-brand mx-auto mt-2 flex-fill text-center" href="./index.html">
              <img src="<?php echo e(asset('Frontend/assets/img/logo/logo1.png')); ?>" alt="">
            </a>
          </div>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#dashboard" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-home fe-16"></i>
                <span class="ml-3 item-text">Dashboard</span><span class="sr-only">(current)</span>
              </a>
              <ul class="collapse list-unstyled pl-4 w-100" id="dashboard">
                <li class="nav-item active">
                  <a class="nav-link pl-3" href="<?php echo e(asset('backend/tinydash-master/light/index.html')); ?>"><span class="ml-1 item-text">Default</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="<?php echo e(asset('backend/tinydash-master/light/dashboard-analytics.html')); ?>"><span class="ml-1 item-text">Analytics</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="<?php echo e(asset('backend/tinydash-master/light/dashboard-sales.html')); ?>"><span class="ml-1 item-text">E-commerce</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="<?php echo e(asset('backend/tinydash-master/light/dashboard-saas.html')); ?>"><span class="ml-1 item-text">Saas Dashboard</span></a>
                </li>
                <li class="nav-item">
                  <a class="nav-link pl-3" href="<?php echo e(asset('backend/tinydash-master/light/dashboard-system.html')); ?>"><span class="ml-1 item-text">Systems</span></a>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Data User</span>
              </a>
              <ul  class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item dropdown">
                    <li class="nav-item">
                      <a class="nav-link pl-3" href="/dashboard/peternak"><span class="ml-1 item-text">Data User Peternak</span>
                      </a>
                    </li>
                </li>
              </ul>
              <ul  class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item dropdown">
                    <li class="nav-item">
                      <a class="nav-link pl-3" href="/dashboard/admin"><span class="ml-1 item-text">Data User Admin</span>
                      </a>
                    </li>
                </li>
              </ul>
              <ul  class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item dropdown">
                    <li class="nav-item">
                      <a class="nav-link pl-3" href="/dashboard/datapetugas"><span class="ml-1 item-text">Data User Petugas</span>
                      </a>
                    </li>
                </li>
              </ul>
            </li>
          </ul>
          <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Data Dokter</span>
              </a>
              <ul  class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item dropdown">
                    <li class="nav-item">
                      <a class="nav-link pl-3" href="/dashboard/dtdokter"><span class="ml-1 item-text">Data Dokter</span>
                      </a>
                    </li>
                </li>
              </ul>
              <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                  <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Data Artikel</span>
                  </a>
                  <ul  class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                    <li class="nav-item dropdown">
                        <li class="nav-item">
                          <a class="nav-link pl-3" href="/dashboard/data_artikel"><span class="ml-1 item-text">Data Artikel</span>
                          </a>
                        </li>
                    </li>
                  </ul>
              <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Data Tutorial</span>
              </a>
              <ul  class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item dropdown">
                    <li class="nav-item">
                      <a class="nav-link pl-3" href="/dashboard/data_tutorial"><span class="ml-1 item-text">Tutorial</span>
                      </a>
                    </li>
                </li>
              </ul>

              <ul class="navbar-nav flex-fill w-100 mb-2">
                <li class="nav-item dropdown">
                  <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                    <i class="fe fe-box fe-16"></i>
                    <span class="ml-3 item-text">Data Puskeswan</span>
                  </a>
                  <ul  class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                    <li class="nav-item dropdown">
                        <li class="nav-item">
                          <a class="nav-link pl-3" href="/dashboard/data_puskeswan"><span class="ml-1 item-text">Data Puskeswan</span>
                          </a>
                        </li>
                    </li>
                  </ul>
                  <ul class="navbar-nav flex-fill w-100 mb-2">
            <li class="nav-item dropdown">
              <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                <i class="fe fe-box fe-16"></i>
                <span class="ml-3 item-text">Data Banner</span>
              </a>
              <ul  class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                <li class="nav-item dropdown">
                    <li class="nav-item">
                      <a class="nav-link pl-3" href="/dashboard/data_banner"><span class="ml-1 item-text">Banner</span>
                      </a>
                    </li>
                </li>
              </ul>
                  <ul class="navbar-nav flex-fill w-100 mb-2">
                    <li class="nav-item dropdown">
                      <a href="#ui-elements" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle nav-link">
                        <i class="fe fe-box fe-16"></i>
                        <span class="ml-3 item-text">Data Kritik dan Saran</span>
                      </a>
                      <ul  class="collapse list-unstyled pl-4 w-100" id="ui-elements">
                        <li class="nav-item dropdown">
                            <li class="nav-item">
                              <a class="nav-link pl-3" href="/dashboard/data_ks"><span class="ml-1 item-text">Data Kritik dan Saran</span>
                              </a>
                            </li>
                        </li>
                      </ul>
          
        </nav>
      </aside><?php /**PATH C:\xampp\htdocs\Kel_4_Gol_F_BWS\UJI COBA\dokternak\resources\views/backend/layouts/sidebar.blade.php ENDPATH**/ ?>