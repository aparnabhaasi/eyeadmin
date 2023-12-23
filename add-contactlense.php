<?php
include 'header.php';

if (isset($_POST['submit'])) {
    // Fetch and sanitize form data
    $disposability = $_POST['disposability'];
    $frameType = $_POST['frame_type'];
    $productName = $_POST['product_name'];
    $actualPrice = $_POST['actual_price'];
    $sellingPrice = $_POST['selling_price'];
    $details = $_POST['details'];
    $information = $_POST['information'];
    $description = $_POST['description'];

    // File upload handling for four images
    $targetDir = "uploads/products";
    $uploadedFiles = [];

    // Loop through each file input
    for ($i = 1; $i <= 4; $i++) {
        $fileName = $_FILES["image$i"]["name"];
        $targetFilePath = $targetDir . "/" . basename($fileName);

        if (move_uploaded_file($_FILES["image$i"]["tmp_name"], $targetFilePath)) {
            $uploadedFiles[] = $targetFilePath;
        } else {
            echo "Error uploading file $i.";
            exit;
        }
    }

    // Insert data into the database
    $sql = "INSERT INTO product (product,disposability, category, frame_type, product_name, actual_price, selling_price, product_image, product_image2, product_image3, product_image4,details,information,description,date) 
            VALUES ('contactlense','$disposability', 'null', '$frameType', '$productName', '$actualPrice', '$sellingPrice', '$uploadedFiles[0]', '$uploadedFiles[1]', '$uploadedFiles[2]', '$uploadedFiles[3]', '$details', '$information','$description',now())";

    // Execute the query using your established database connection ($conn)
    if ($conn->query($sql) === TRUE) {
      return redirect('product-contactlense.php');
        // echo "New record created successfully";
        // Redirect or perform other actions upon successful insertion
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    // Close the database connection
    $conn->close();
}
?>


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
              <div class="row gy-4 justify-content-center">

                    <div class="col-xl-6 mt-5">
                        <!-- HTML5 Inputs -->
                        <div class="card mb-4">
                          <h3 class="card-header text-center">Add New Contact lense</h3>
                          <div class="card-body">
                            <div class="form-floating form-floating-outline mb-4">
                              <input class="form-control" name="product_name" type="text" placeholder="Enter Product name" id="html5-text-input" />
                              <label for="html5-text-input">Product name</label>
                            </div>

                            <div class="form-floating form-floating-outline mb-4">
                                <select class="form-control" id="exampleSelect" name="disposability" aria-label="Select Type">
                                    <!-- Add your options here -->
                                    <option value="Rectangle Frames">Daily Disposable</option>
                                    <option value="Wayfarer Frames">Two Weekly Disposable</option>
                                    <option value="Round Frames">Monthly Disposable</option>
                                    <option value="Aviator Frames">Yearly Disposable  </option>
                                    
                                </select>
                                <label for="exampleSelect">Disposablity</label>
                            </div>
                             
                            <div class="form-floating form-floating-outline mb-4">
                              <input class="form-control" type="search" name="actual_price"  placeholder="Enter actual price" id="html5-search-input" />
                              <label for="html5-search-input">Actual Price</label>
                            </div>
                            <div class="form-floating form-floating-outline mb-4">
                              <input class="form-control" type="search" name="selling_price" placeholder="Enter selling price" id="html5-search-input" />
                              <label for="html5-search-input">Selling Price</label>
                            </div>
                            <!-- image -->
                            <div class="form-floating form-floating-outline mb-4">
                              <input class="form-control" type="file" placeholder="" name="image1" id="html5-text-input" />
                              <label for="html5-text-input">Product Image</label>
                            </div>

                            <div class="form-floating form-floating-outline mb-4">
                              <input class="form-control" type="file" placeholder="" name="image2" id="html5-text-input" />
                              <label for="html5-text-input">Product 2nd Image</label>
                            </div>

                            <div class="form-floating form-floating-outline mb-4">
                              <textarea class="form-control" placeholder="Enter Product detials" name="details" id="html5-textarea-input" style="height: 100px;"></textarea>
                              <label for="html5-textarea-input">Product details</label>
                            </div>

                            <div class="form-floating form-floating-outline mb-4">
                              <textarea class="form-control" placeholder="Enter Product description" name="description" id="html5-textarea-input" style="height: 100px;"></textarea>
                              <label for="html5-textarea-input">Product description</label>
                            </div>

                            <div class="form-floating form-floating-outline mb-4">
                              <textarea class="form-control" placeholder="Enter Product information"  name="information" id="html5-textarea-input" style="height: 100px;"></textarea>
                              <label for="html5-textarea-input">Product information</label>
                            </div>
                    
                            
                          </div>
                        </div>
      
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
