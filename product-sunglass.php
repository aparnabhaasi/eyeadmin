<?php
include 'header.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    // Prepare and execute the deletion query using prepared statements
    $stmt = $conn->prepare("DELETE FROM product WHERE product_id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        // Deletion successful, redirect to the product-computerglass.php page
        return redirect("product-computerglass.php");
        exit();
    } else {
        // Error occurred during deletion
        echo "Error deleting product: " . $conn->error;
    }

    $stmt->close();
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
                    <div class="text-end p-3"><a href="add-sunglass.php" class="btn btn-success">Add new <i class="fa fa-plus"></i></a></div>

                      <h3 class="card-header text-center"><strong>Sunglassess</strong></h3>
                  <hr>
                  
                  <div class="table-responsive text-nowrap">
                    <table class="table table-hover">
                      <thead>
                        <tr>
                          <th>#</th>
                          <th>Product Name</th>
                          <th>Actual Price</th>
                          <th>Selling Price</th>
                          <th>Category</th>
                          <th>Frame Type</th>
                          <th>Product Image</th>
                          <th style="width: 100px;">Details</th>
                          <th>Description</th>
                          <th>Information</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody class="table-border-bottom-0">
                      <?php
                        $q="select * from product where product='sunglass'";
                        $res=select($q);
                        $i=1;
                        foreach($res as $row)
                        {?>
                        <tr>
                        <td><?php echo $i;?></td>
                            <td><?php echo $row['product_name'];?></td>
                            <td>₹ <?php echo $row['actual_price'];?></td>
                            <td>₹ <?php echo $row['selling_price'];?></td>
                            <td><?php echo $row['category'];?></td>
                            <td><?php echo $row['frame_type'];?></td>
                            <td><img src="<?php echo $row['product_image'];?>" alt="" width="100"></td>
                            <td style=" overflow: hidden; text-overflow: ellipsis;">
                            <?php echo $row['details'];?>
                            </td>
                            <td style=" overflow: hidden; text-overflow: ellipsis;">
                            <?php echo $row['description'];?>
                            </td>
                            <td style=" overflow: hidden; text-overflow: ellipsis;">
                            <?php echo $row['information'];?>
                            </td>
                            <td>
                                <button class="btn btn-info">Update <i class="fa fa-pen"></i></button>
                                <a href="?id=<?php echo $row['product_id'];?>"><button  class="btn btn-danger">Delete <i class="fa fa-trash"></i></button></a>
                            </td>                    
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
