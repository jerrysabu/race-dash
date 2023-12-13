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
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Log Book Admin</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <link rel="stylesheet" href="assets/vendors/jvectormap/jquery-jvectormap.css">
    <link rel="stylesheet" href="assets/vendors/flag-icon-css/css/flag-icon.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.carousel.min.css">
    <link rel="stylesheet" href="assets/vendors/owl-carousel-2/owl.theme.default.min.css">
    <!-- End plugin css for this page -->
    <!-- inject:css -->
    <!-- endinject -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        <?php include('partials/side-nav.php') ?>
        <!-- partial -->
        <div class="container-fluid page-body-wrapper">
            <!-- partial:partials/_navbar.html -->
            <?php include('partials/header.php'); ?>
            <!-- partial -->
            <div class="main-panel">
                <div class="content-wrapper">



                    <div class="row ">
                        <div class="col-12 grid-margin">
                            <div class="card">
                                <div class="card-body">
                                    <h4 class="card-title">Logs</h4>
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>

                                                    <th> Subject </th>
                                                    <th> Teacher </th>
                                                    <th> Episode </th>
                                                    <th> Language </th>
                                                    <th> Shoot On </th>
                                                    <th> Studio In </th>
                                                    <th> Edited On </th>
                                                    <th> Edit Status </th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>

                                                    <td> French </td>
                                                    <td> Dona </td>
                                                    <td> 27 </td>
                                                    <td> Malayalam </td>
                                                    <td> 31/10/22-12:30pm </td>
                                                    <td> Sojin </td>
                                                    <td> 31/10/22-12:30pm </td>
                                                    <td>
                                                        <div class="badge badge-outline-success">Done</div>
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td> History </td>
                                                    <td> Anna </td>
                                                    <td> 15 </td>
                                                    <td> English </td>
                                                    <td> 31/10/22-12:30pm </td>
                                                    <td> Sojin </td>
                                                    <td> - </td>
                                                    <td>
                                                        <div class="badge badge-outline-warning">Pending</div>
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td> Geography </td>
                                                    <td> Amal </td>
                                                    <td> 40 </td>
                                                    <td> Malayalam </td>
                                                    <td> 31/10/22-12:30pm </td>
                                                    <td> Sojin </td>
                                                    <td> - </td>
                                                    <td>
                                                        <div class="badge badge-outline-warning">Pending</div>
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td> Mathematics </td>
                                                    <td> Bijeesh </td>
                                                    <td> 15 </td>
                                                    <td> Malayalam </td>
                                                    <td> 31/10/22-12:30pm </td>
                                                    <td> Sojin </td>
                                                    <td> 31/10/22-12:30pm </td>
                                                    <td>
                                                        <div class="badge badge-outline-success">Done</div>
                                                    </td>
                                                </tr>
                                                <tr>


                                                    <td> Keraleeyam </td>
                                                    <td> Jishnu </td>
                                                    <td> 15 </td>
                                                    <td> Malayalam </td>
                                                    <td> 31/10/22-12:30pm </td>
                                                    <td> Sojin </td>
                                                    <td> 31/10/22-12:30pm </td>
                                                    <td>
                                                        <div class="badge badge-outline-success">Done</div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                </div>
                <!-- content-wrapper ends -->
                <!-- partial:partials/_footer.html -->
                <?php include('partials/footer.php') ?>
                <!-- partial -->
            </div>
            <!-- main-panel ends -->
        </div>
        <!-- page-body-wrapper ends -->
    </div>
    <!-- container-scroller -->
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page -->
    <script src="assets/vendors/chart.js/Chart.min.js"></script>
    <script src="assets/vendors/progressbar.js/progressbar.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap.min.js"></script>
    <script src="assets/vendors/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
    <script src="assets/vendors/owl-carousel-2/owl.carousel.min.js"></script>
    <!-- End plugin js for this page -->
    <!-- inject:js -->
    <script src="assets/js/off-canvas.js"></script>
    <script src="assets/js/hoverable-collapse.js"></script>
    <script src="assets/js/misc.js"></script>
    <script src="assets/js/settings.js"></script>
    <script src="assets/js/todolist.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page -->
    <script src="assets/js/dashboard.js"></script>
    <!-- End custom js for this page -->
</body>

</html>
<?php }
?>