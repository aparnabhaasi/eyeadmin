<?php
session_start();


// Check if the user is not logged in (session variable not set)
if (!isset($_SESSION['username'])) {
    // Redirect the user to the login page
    header("Location: login.php");
    exit();
}
include 'connection.php'?>
<!DOCTYPE html>

<html
  lang="en"
  class="light-style layout-menu-fixed layout-compact"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="assets/"
  data-template="vertical-menu-template-free">
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0" />

    <title>Eye Guard Admin</title>

    <meta name="description" content="" />

    <!-- Favicon -->
    <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&ampdisplay=swap"
      rel="stylesheet" />

    <link rel="stylesheet" href="assets/vendor/fonts/materialdesignicons.css" />

    <!-- Menu waves for no-customizer fix -->
    <link rel="stylesheet" href="assets/vendor/libs/node-waves/node-waves.css" />

    <!-- Core CSS -->
    <link rel="stylesheet" href="assets/vendor/css/core.css" class="template-customizer-core-css" />
    <link rel="stylesheet" href="assets/vendor/css/theme-default.css" class="template-customizer-theme-css" />
    <link rel="stylesheet" href="assets/css/demo.css" />

    <!-- Vendors CSS -->
    <link rel="stylesheet" href="assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.css" />
    <link rel="stylesheet" href="assets/vendor/libs/apex-charts/apex-charts.css" />

    <!-- font awsome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

    <!-- Helpers -->
    <script src="assets/vendor/js/helpers.js"></script>
    <script src="assets/js/config.js"></script>
  </head>

  <body>
    <!-- Layout wrapper -->
    <div class="layout-wrapper layout-content-navbar">
      <div class="layout-container">
        <!-- Menu -->

        <aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
          <div class="app-brand demo">
            <a href="index.php" class="app-brand-link">
              
              <span class="app-brand-text demo menu-text fw-semibold ms-2">Eye Guard Admin</span>
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto">
              <i class="mdi menu-toggle-icon d-xl-block align-middle mdi-20px"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          <ul class="menu-inner py-1">
\            <li class="menu-item">
              <a href="index.php" class="menu-link ">
                <i class="menu-icon tf-icons mdi mdi-home-outline"></i>
                <div>Dashboards</div>
              </a>
            </li>
            
            <li class="menu-header fw-medium mt-4">
              <span class="menu-header-text">Product Management</span>
            </li>
            <!-- Products -->
            <li class="menu-item">
              <a href="product-eyeglass.php" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-glasses"></i>
                <div data-i18n="Email">Eye Glasses</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="product-sunglass.php" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-glasses"></i>
                <div data-i18n="Email">Sun Glasses</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="product-computerglass.php" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-glasses"></i>
                <div data-i18n="Email">Computer Glassess</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="product-contactlense.php" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-glasses"></i>
                <div data-i18n="Email">Contact Lenses</div>
              </a>
            </li>
            

            <li class="menu-header fw-medium mt-4">
              <span class="menu-header-text">Order Management</span>
            </li>
            <!-- Orders -->
            <li class="menu-item">
              <a href="new-orders.php" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-cube-outline"></i>
                <div data-i18n="Email">New orders</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="shipped-orders.php" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-form-select"></i>
                <div data-i18n="Email">Shipped orders</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="delivered-orders.php" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-checkbox-marked-circle-outline"></i>
                <div data-i18n="Email">Delivered orders</div>
              </a>
            </li>


            <li class="menu-header fw-medium mt-4">
              <span class="menu-header-text">Website Management</span>
            </li>
            <!-- website -->
            <li class="menu-item">
              <a href="add-webcontent.php" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
                <div data-i18n="Email">Privacy Policy</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="add-webcontent.php" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
                <div data-i18n="Email">Refund Policy</div>
              </a>
            </li>
            <li class="menu-item">
              <a href="add-webcontent.php" class="menu-link">
                <i class="menu-icon tf-icons mdi mdi-file-document-multiple-outline"></i>
                <div data-i18n="Email">Terms of use</div>
              </a>
            </li>
            


            <li class="menu-header fw-medium mt-4">
              <span class="menu-header-text">User Management</span>
            </li>
            <li class="menu-item">
              <a href="users.php" class="menu-link">
                <i class="menu-icon fa-regular fa-user"></i>
                <div data-i18n="Email">Users</div>
              </a>
            </li>
        
            
            
            
          </ul>
        </aside>
        <!-- / Menu -->