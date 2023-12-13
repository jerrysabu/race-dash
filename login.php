<?php
session_start();
error_reporting(0);
include('includes/config.php');

if (strlen($_SESSION['alogin']) == 0) {


if (isset($_POST['login'])) {
    $username = ($_POST['username']);
    $password = md5($_POST['password']);
    $sql = "SELECT * FROM users WHERE name='$username' AND password='$password'";
    // print_r($sql);
    // exit();
    $query = $dbh->prepare($sql);
    $query->execute();
    $results = $query->fetchAll(PDO::FETCH_OBJ);
    if ($query->rowCount() > 0) {
        $_SESSION['alogin'] =  $username;
        echo "<script> location.href='index.php'; </script>";
        // echo "<script type='text/javascript'> document.location ='announcements.php; </script>";
    } else {
        echo "<script>alert('Invalid Password or Email!!');</script>";
    }
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login | Log Book</title>
    <!-- plugins:css -->
    <link rel="stylesheet" href="assets/vendors/mdi/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="assets/vendors/css/vendor.bundle.base.css">
    <!-- endinject -->
    <!-- Plugin css for this page -->
    <!-- End plugin css for this page -->
    <!-- Layout styles -->
    <link rel="stylesheet" href="assets/css/demo/style.css">
    <!-- End layout styles -->
    <link rel="shortcut icon" href="assets/images/favicon.png" />
</head>

<body>
    <script src="../assets/js/preloader.js"></script>
    <div class="body-wrapper">
        <div class="main-wrapper">
            <div class="page-wrapper full-page-wrapper d-flex align-items-center justify-content-center">
                <main class="auth-page">
                    <div class="mdc-layout-grid">
                        <div class="mdc-layout-grid__inner">
                            <div
                                class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet">
                            </div>
                            <div
                                class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-6-tablet">
                                <div class="mdc-card">
                                    <form method="post">
                                        <div class="mdc-layout-grid">
                                            <div class="mdc-layout-grid__inner">
                                                <div
                                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input name="username" class="mdc-text-field__input"
                                                            id="text-field-hero-input">
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input"
                                                            class="mdc-floating-label">Username</label>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <div class="mdc-text-field w-100">
                                                        <input name="password" class="mdc-text-field__input"
                                                            type="password" id="text-field-hero-input">
                                                        <div class="mdc-line-ripple"></div>
                                                        <label for="text-field-hero-input"
                                                            class="mdc-floating-label">Password</label>
                                                    </div>
                                                </div>
                                                <div
                                                    class="mdc-layout-grid__cell stretch-card mdc-layout-grid__cell--span-12">
                                                    <button name="login" id="password"
                                                        class="mdc-button mdc-button--raised w-100">
                                                        Login
                                                    </button>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <div
                                class="stretch-card mdc-layout-grid__cell--span-4-desktop mdc-layout-grid__cell--span-1-tablet">
                            </div>
                        </div>
                    </div>
                </main>
            </div>
        </div>
    </div>
    <!-- plugins:js -->
    <script src="assets/vendors/js/vendor.bundle.base.js"></script>
    <!-- endinject -->
    <!-- Plugin js for this page-->
    <!-- End plugin js for this page-->
    <!-- inject:js -->
    <script src="assets/js/material.js"></script>
    <script src="assets/js/misc.js"></script>
    <!-- endinject -->
    <!-- Custom js for this page-->
    <!-- End custom js for this page-->
</body>

</html>
<?php } else {
    echo "<script> location.href='index.php'; </script>";
}
?>