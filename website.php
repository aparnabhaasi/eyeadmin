<?php include 'header.php' ?>




        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar">
            <div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
              <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
                <i class="mdi mdi-menu mdi-24px"></i>
              </a>
            </div>

            <div class="navbar-nav-right d-flex align-items-center" id="navbar-collapse">
              

              <ul class="navbar-nav flex-row align-items-center ms-auto">
                

                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown">
                    <div class="avatar avatar-online">
                      <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                    <li>
                      <a class="dropdown-item pb-2 mb-1" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-2 pe-1">
                            <div class="avatar avatar-online">
                              <img src="assets/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                            </div>
                          </div>
                          <div class="flex-grow-1">
                            <h6 class="mb-0">Eye Guard</h6>
                            <small class="text-muted">Admin</small>
                          </div>
                        </div>
                      </a>
                    </li>
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="#">
                        <i class="mdi mdi-account-outline me-1 mdi-20px"></i>
                        <span class="align-middle">My Profile</span>
                      </a>
                    </li>
                    
                    <li>
                      <div class="dropdown-divider my-1"></div>
                    </li>
                    <li>
                      <a class="dropdown-item" href="javascript:void(0);">
                        <i class="mdi mdi-power me-1 mdi-20px"></i>
                        <span class="align-middle">Log Out</span>
                      </a>
                    </li>
                  </ul>
                </li>
                <!--/ User -->
              </ul>
            </div>
          </nav>

          <!-- / Navbar -->



          <!-- Content wrapper -->
          <div class="content-wrapper">
            <!-- Content -->

            <div class="container-xxl flex-grow-1 container-p-y">
              <div class="row gy-4">

                
                <div class="col-sm-4">
                <a href="add-webcontent.php?type=privacy-policy">
                    <div class="card h-100">
                        <div class="row p-4">
                            <div class="card-body col-8">
                                <h3 class="mb-2">Privacy Policy</h3>
                                <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                                </div>
                                <small>Manage Privacy Policy</small>
                            </div>
                            <div class="avatar col-4 text-center " >
                              <div class="avatar-initial bg-info p-3">
                                <i class="fa-solid fa-desktop fa-2xl"></i>
                              </div>
                          </div>
                        </div>
                    </div>
                  </a>
                </div>

                <div class="col-sm-4">
                <a href="add-webcontent.php?type=refund-policy">
                      <div class="card h-100">
                          <div class="row p-4">
                              <div class="card-body col-8">
                                  <h3 class="mb-2">Refund Policy</h3>
                                  <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                                  </div>
                                  <small>Manage Refund Policy</small>
                              </div>
                              <div class="avatar col-4 text-center " >
                                <div class="avatar-initial bg-info p-3">
                                  <i class="fa-solid fa-desktop fa-2xl"></i>
                                </div>
                            </div>
                          </div>
                      </div>
                    </a>
                  </div>

                  <div class="col-sm-4">
                  <a href="add-webcontent.php?type=terms">
                      <div class="card h-100">
                          <div class="row p-4">
                              <div class="card-body col-8">
                                  <h3 class="mb-2">Terms of Use</h3>
                                  <div class="d-flex flex-wrap align-items-center mb-2 pb-1">
                                  </div>
                                  <small>Manage Terms of Use</small>
                              </div>
                              <div class="avatar col-4 text-center " >
                                <div class="avatar-initial bg-info p-3">
                                  <i class="fa-solid fa-desktop fa-2xl"></i>
                                </div>
                            </div>
                          </div>
                      </div>
                    </a>
                  </div>
                
              

              </div>
            </div>
            <!-- / Content -->

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl text-center">
                <div class="footer-container py-3">
                  <div class="text-body mb-2">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with <span class="text-danger"><i class="tf-icons mdi mdi-heart"></i></span> by
                    <a href="https://themeselection.com" target="_blank" class="footer-link fw-medium"
                      >Gronetics Technologies</a
                    >
                  </div>
                  
                </div>
              </div>
            </footer>
            <!-- / Footer -->

            <div class="content-backdrop fade"></div>
          </div>
          <!-- Content wrapper -->
        </div>
        <!-- / Layout page -->
      </div>

      <!-- Overlay -->
      <div class="layout-overlay layout-menu-toggle"></div>
    </div>
    <!-- / Layout wrapper -->



    <!-- Core JS -->
    <!-- build:js assets/vendor/js/core.js -->
    <script src="assets/vendor/libs/jquery/jquery.js"></script>
    <script src="assets/vendor/libs/popper/popper.js"></script>
    <script src="assets/vendor/js/bootstrap.js"></script>
    <script src="assets/vendor/libs/node-waves/node-waves.js"></script>
    <script src="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="assets/vendor/js/menu.js"></script>

    <!-- endbuild -->

    <!-- Vendors JS -->
    <script src="assets/vendor/libs/apex-charts/apexcharts.js"></script>

    <!-- Main JS -->
    <script src="assets/js/main.js"></script>

    <!-- Page JS -->
    <script src="assets/js/dashboards-analytics.js"></script>

    <!-- Place this tag in your head or just before your close body tag. -->
    <script async defer src="https://buttons.github.io/buttons.js"></script>
  </body>
</html>
