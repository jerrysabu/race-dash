<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else {
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Log Book | Race2IAS</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
    <script src="assets/js/preloader.js"></script>
    <div class="body-wrapper">
        <!-- partial:partials/_sidebar.html -->
        <?php include('partials/side-nav.php') ?>
        <!-- partial -->
        <div class="main-wrapper mdc-drawer-app-content">
            <!-- partial:partials/_navbar.html -->
            <?php include('partials/header.php')?>
            <!-- partial -->
            <div class="page-wrapper mdc-toolbar-fixed-adjust">
                <main class="content-wrapper">

                    <div class="mdc-layout-grid">
                        <div class="mdc-layout-grid__inner">
                            <div class="mdc-layout-grid__cell--span-12">
                                <div class="mdc-card">
                                    <h6 class="card-title">New Log</h6>
                                    <div class="template-demo">

                                        <div class="template-demo">
                                            <div class="mdc-select demo-width-class mdc-ripple-upgraded"
                                                data-mdc-auto-init="MDCSelect" data-mdc-auto-init-state="initialized"
                                                style="--mdc-ripple-fg-size: 120px; --mdc-ripple-fg-scale: 1.8141006647662894; --mdc-ripple-fg-translate-start: 18.89996337890625px, -12.599990844726562px; --mdc-ripple-fg-translate-end: 40px, -32px;">
                                                <input type="hidden" name="enhanced-select" value="">
                                                <i class="mdc-select__dropdown-icon"></i>
                                                <div class="mdc-select__selected-text" tabindex="0"></div>

                                                <span class="mdc-floating-label">Pick a Food Group</span>
                                                <div class="mdc-line-ripple mdc-line-ripple--active mdc-line-ripple--deactivating"
                                                    style="transform-origin: 78.9px center;"></div>
                                            </div>


                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                    <input class="mdc-text-field__input" id="text-field-hero-input">
                                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label for="text-field-hero-input"
                                                                class="mdc-floating-label" style="">Subject </label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                    <input class="mdc-text-field__input" id="text-field-hero-input">
                                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label for="text-field-hero-input"
                                                                class="mdc-floating-label" style="">Episode </label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                            </div>

                                            <div
                                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-6-desktop">
                                                <div class="mdc-text-field mdc-text-field--outlined">
                                                    <input class="mdc-text-field__input" id="text-field-hero-input">
                                                    <div class="mdc-notched-outline mdc-notched-outline--upgraded">
                                                        <div class="mdc-notched-outline__leading"></div>
                                                        <div class="mdc-notched-outline__notch">
                                                            <label for="text-field-hero-input"
                                                                class="mdc-floating-label" style="">Language </label>
                                                        </div>
                                                        <div class="mdc-notched-outline__trailing"></div>
                                                    </div>
                                                </div>
                                            </div>


                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </main>

                <!-- partial:partials/_footer.html -->
                <?php include('partials/footer.php') ?>
                <!-- partial -->
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <script src="assets/vendors/chartjs/Chart.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/material.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page-->
</body>

</html>
<?php }
?>