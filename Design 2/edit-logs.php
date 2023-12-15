<?php
session_start();
error_reporting(0);
include('includes/config.php');
if (strlen($_SESSION['alogin']) == 0) {
    header('location:login.php');
} else {
    if (isset($_POST['submitBTN'])) {


        $editedDate=$_POST['olddate'];

        // print_r($_POST['usertype']);
        // exit();

if($_POST['usertype']=='Studio'){
    $editStatus=$_POST['oldedit'];

}else{
        if($_POST['editstatus'] !== $_POST['oldedit']){
            $editStatus=$_POST['editstatus'];
            if($editStatus=='Done'){
                date_default_timezone_set('Asia/Kolkata');
                    $editedDate=date("y/m/d h:i:s");
                }
        }else{
            $editStatus=$_POST['oldedit'];
        }   
    }


        
            if($_SESSION['alogin']!=$_POST['oldStudio'])
            {
                $studioIn=$_POST['oldStudio'];
            }else{
                $studioIn= $_POST['username'];
            }

        $id = $_POST['id'];
        $subject = $_POST['subject'];
        $teacher = $_POST['teacher'];
        $episode = $_POST['episode'];
        $language = $_POST['language'];
        $topic = $_POST['topic'];
       
        // $editStatus="Pending";
        $okshot= $_POST['okshot'];

        $sql = "UPDATE `data-table` SET editedDate='$editedDate', editStatus='$editStatus',subject='$subject',teacher='$teacher',episode='$episode',language='$language',topic='$topic',studioIn='$studioIn',okshot='$okshot' where id='$id'";
        
        // $sql = "INSERT INTO `data-table`(subject,teacher,episode,language,topic,studioIn,editStatus) VALUES ('" . $subject . "','" . $teacher . "','" . $episode . "','" . $language . "','" . $topic . "','".$studioIn."','".$editStatus."')";
        
        //  print_r($sql);
        // exit();
        $query = $dbh->prepare($sql);
        $result = $query->execute();
        if ($query->rowCount() > 0) {
            echo '<script>alert("Success")</script>';
            echo '<script>window.location = "index.php";</script>';
        } else {
            echo '<script>alert("something went wrong please try again")</script>';
            echo '<script>window.location = "index.php";</script>';
        }
    }
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



                    <div class="col-12 grid-margin">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Edit Log</h4>
                                <form class="form-sample" method="POST">
                                    <!-- <p class="card-description"> Testination </p> -->
                                    <?php
                                                $sessionname=$_SESSION['alogin'];
                                                $sql = "SELECT `name` from users where username =  '$sessionname'";
                                                // print_r($sql);
                                                // exit();
                                                $query = $dbh->prepare($sql);
                                                $query->execute();
                                                $rname = $query->fetchAll(PDO::FETCH_OBJ);
                                                ?>
                                    <input type="hidden" id="username" name="username"
                                        value="<?php echo $rname[0]->name ?>" />

                                    <?php
                                        $id = $_GET['id'];
                                        $sql = "SELECT * from  `data-table` where id=$id ";
                                        // print_r($sql);
                                        // exit();
                                        $query = $dbh->prepare($sql);
                                        $query->execute();
                                        $userArr = $query->fetchAll(PDO::FETCH_OBJ);
                                        if ($query->rowCount() > 0) {
                                        ?>


                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Subject</label>
                                                <div class="col-sm-9">
                                                    <input type="hidden" id="oldedit" name="oldedit"
                                                        value="<?php echo $userArr[0]->editStatus ?>" />

                                                    <select class="form-control" name="subject" id="subject" required>
                                                        <option selected> <?php echo $userArr[0]->subject; ?> </option>
                                                        <?php
                                                $sql = "SELECT * from subject";
                                                $query = $dbh->prepare($sql);
                                                $query->execute();
                                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                               
                                                $cnt = 1;
                                                if ($query->rowCount() > 0) {
                                                    foreach ($results as $result) {
                                                ?>
                                                        <option><?php echo $result->subject ?></option>
                                                        <?php }
                                                }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Teacher Name</label>
                                                <div class="col-sm-9">
                                                    <select class="form-control" required name="teacher" id="teacher">
                                                        <option selected> <?php echo $userArr[0]->teacher; ?> </option>
                                                        <?php
                                                $sql = "SELECT * from teacher";
                                                $query = $dbh->prepare($sql);
                                                $query->execute();
                                                $results = $query->fetchAll(PDO::FETCH_OBJ);
                                                                                               $cnt = 1;
                                                if ($query->rowCount() > 0) {
                                                    foreach ($results as $result) {
                                                ?>
                                                        <option><?php echo $result->name ?></option>
                                                        <?php }
                                                }
                                                        ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Episode</label>
                                                <div class="col-sm-9">
                                                    <input type="hidden" id="id" name="id"
                                                        value="<?php echo htmlentities($userArr[0]->id); ?>" />

                                                    <input type="hidden" id="olddate" name="olddate"
                                                        value="<?php echo htmlentities($userArr[0]->editedDate); ?>" />

                                                    <input type="hidden" id="oldStudio" name="oldStudio"
                                                        value="<?php echo htmlentities($userArr[0]->studioIn); ?>" />

                                                    <input name="episode" id="episode" type="number"
                                                        value="<?php echo $userArr[0]->episode; ?>" class="form-control"
                                                        placeholder="1" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Language</label>
                                                <div class="col-sm-9">
                                                    <select name="language" id="language" class="form-control" required>
                                                        <option selected> <?php echo $userArr[0]->language; ?> </option>
                                                        <option>English</option>
                                                        <option>Malayalam</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Tpoic</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="topic" id="topic" class="form-control"
                                                        value="<?php echo $userArr[0]->topic; ?>"
                                                        placeholder="Episode Topic" required>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group row">
                                                <label class="col-sm-3 col-form-label">Shot Number</label>
                                                <div class="col-sm-9">
                                                    <input type="text" name="okshot" id="okshot" class="form-control"
                                                        value="<?php echo $userArr[0]->okshot; ?>"
                                                        placeholder="Episode Topic" required>
                                                </div>
                                            </div>
                                        </div>

                                    </div>
                                    <?php 
                                     $sessionname=$_SESSION['alogin'];
                                     $sql = "SELECT * from users where username =  '$sessionname'";
                                     // print_r($sql);
                                     // exit();
                                     $query = $dbh->prepare($sql);
                                     $query->execute();
                                     $rname = $query->fetchAll(PDO::FETCH_OBJ);
                                     $usertype=$rname[0]->usertype;
                                     ?>
                                    <input type="hidden" id="usertype" name="usertype"
                                        value="<?php echo $usertype ?>" />

                                    <?php
                                    if($usertype=='Editor'){?>

                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group row">

                                                <label class="col-sm-3 col-form-label">Edit Status</label>
                                                <div class="col-sm-9">
                                                    <select name="editstatus" id="editstatus" class="form-control"
                                                        required>
                                                        <option selected> <?php echo $userArr[0]->editStatus; ?>
                                                        </option>
                                                        <option>Pending</option>
                                                        <option>Done</option>

                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <?php }?>

                                    <button id="submitBTN" name="submitBTN" type="submit"
                                        class="btn btn-primary mr-2">Submit</button>
                                    <button class="btn btn-dark">Cancel</button>

                                    <?php }
                                    ?>
                                </form>
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