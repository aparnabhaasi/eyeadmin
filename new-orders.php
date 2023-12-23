<?php include 'header.php';
if(isset($_POST['ship'])){
 extract($_POST);
 $oid= $_POST['oid'];
  $q= "update tbl_order set status='shipped' where order_id='$oid'";
  update($q);
  return redirect('shipped-orders.php');
}
?>

        <!-- Layout container -->
        <div class="layout-page">
          <!-- Navbar -->

          <nav
            class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
            id="layout-navbar"
          >
            <div
              class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none"
            >
              <a
                class="nav-item nav-link px-0 me-xl-4"
                href="javascript:void(0)"
              >
                <i class="mdi mdi-menu mdi-24px"></i>
              </a>
            </div>

            <div
              class="navbar-nav-right d-flex align-items-center"
              id="navbar-collapse"
            >
              <ul class="navbar-nav flex-row align-items-center ms-auto">
                <!-- User -->
                <li class="nav-item navbar-dropdown dropdown-user dropdown">
                  <a
                    class="nav-link dropdown-toggle hide-arrow p-0"
                    href="javascript:void(0);"
                    data-bs-toggle="dropdown"
                  >
                    <div class="avatar avatar-online">
                      <img
                        src="assets/img/avatars/1.png"
                        alt
                        class="w-px-40 h-auto rounded-circle"
                      />
                    </div>
                  </a>
                  <ul class="dropdown-menu dropdown-menu-end mt-3 py-2">
                    <li>
                      <a class="dropdown-item pb-2 mb-1" href="#">
                        <div class="d-flex align-items-center">
                          <div class="flex-shrink-0 me-2 pe-1">
                            <div class="avatar avatar-online">
                              <img
                                src="assets/img/avatars/1.png"
                                alt
                                class="w-px-40 h-auto rounded-circle"
                              />
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

                <div class="row">
                    <div class="col-md">
                        <div class="card mb-4">
                            <div class="card-body pt-4">
                                <div class="form-floating form-floating-outline d-flex">
                                    <input
                                        type="text"
                                        class="form-control flex-grow-1"
                                        id="floatingInput"
                                        placeholder=""
                                        aria-describedby="floatingInputHelp" />
                                    <button class="btn btn-primary"><i class="fa fa-search"></i></button>
                                    <label for="floatingInput">Search...</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card">
                  <h3 class="card-header text-center"><strong>New Orders</strong></h3><hr>
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>User</th>
                          <th>Billing Address</th>
                          <th>Purchase Date</th>
                          <th>Payment Mode</th>
                          <td>View</td>
                          <th>Action</th>
                        </tr>
                      </thead>

                      <tbody class="table-border-bottom-0">
                      <?php
$qr="SELECT * FROM tbl_childcart INNER JOIN tbl_mastcart USING(mastcart_id) INNER JOIN users ON users.user_id = tbl_mastcart.user_id INNER JOIN tbl_order USING(mastcart_id) INNER JOIN user_address USING(user_address_id) where status='pending';
";
$hh=select($qr);
$i=1;
foreach($hh as $row){
  $oid= $row['order_id'];
	$user =$row['name'];
	$order_date =$row['order_date'];
  $address =$row['town'];
	$order_date =$row['order_date'];
?>
                        <tr>
                          <td><?php echo $i++;?></td>
                          <td><?php echo $user;?></td>
                          <td><?php echo $address;?></td>
                          <td><?php echo $order_date;?></td>
                          <td>COD</td>
                          <td><button
                            type="button"
                            class="btn btn-info"
                            data-bs-toggle="modal"
                            data-bs-target="#modalCenter">
                            Details &nbsp; <i class="fa fa-eye"></i>
                          </button></td>
                          <form id="<?php echo $oid; ?>" action="" method="POST">
                    <input type="hidden" name="oid" value="<?php echo $oid; ?>">
                    <td><button type="submit" name="ship" class="btn btn-primary">Ship</button></td>
                </form>
                        </tr>
                        <?php } ?>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- / Content -->

            <div class="col-lg-4 col-md-6">
                <div class="mt-3">
                  <!-- Button trigger modal -->
            
                  <!-- Modal -->
                  <div class="modal fade" id="modalCenter" tabindex="-1" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h4 class="modal-title" id="modalCenterTitle">Order Details</h4>
                          <button
                            type="button"
                            class="btn-close"
                            data-bs-dismiss="modal"
                            aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                          <div class="container">
                            <p>Name: <strong>Sample</strong></p><hr>
                            <p>Address: <strong>Sample</strong></p><hr>
                            <p>Pincode: <strong>Sample</strong></p><hr>
                            <p>Mobile: <strong>Sample</strong></p><hr>
                            <p>Product: <strong>Sample</strong></p><hr>
                            <p>Lense type: <strong>Sample</strong></p><hr>
                          </div>
                        </div>
                        <div class="modal-footer">
                          <button type="button" class="btn btn-outline-danger" data-bs-dismiss="modal">
                            Close
                          </button>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>

            <!-- Footer -->
            <footer class="content-footer footer bg-footer-theme">
              <div class="container-xxl text-center">
                <div class="footer-container py-3">
                  <div class="text-body mb-2">
                    ©
                    <script>
                      document.write(new Date().getFullYear());
                    </script>
                    , made with
                    <span class="text-danger"
                      ><i class="tf-icons mdi mdi-heart"></i
                    ></span>
                    by
                    <a
                      href="https://themeselection.com"
                      target="_blank"
                      class="footer-link fw-medium"
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
