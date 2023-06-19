<!DOCTYPE html>
<html lang="en">
<head>
<title>System Admin</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<link rel="stylesheet" href="../css/bootstrap.min.css" />
<link rel="stylesheet" href="../css/bootstrap-responsive.min.css" />
<link rel="stylesheet" href="../css/fullcalendar.css" />
<link rel="stylesheet" href="../css/matrix-style.css" />
<link rel="stylesheet" href="../css/matrix-media.css" />
<link href="../font-awesome/css/font-awesome.css" rel="stylesheet" />
<link rel="stylesheet" href="../css/jquery.gritter.css" />
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700,800' rel='stylesheet' type='text/css'>
</head>
<body>


<form role="form" action="index.php" method="POST">
<?php
include 'dbcon.php';
?>

<?php

if (isset($_POST['fullname'])) {
  $fullname = $_POST['fullname'];    
  $username = $_POST['username'];
  $password = $_POST['password'];
  $services = $_POST['services'];
  $gender = $_POST['gender'];
  $plan = $_POST['plan'];
  $address = $_POST['address'];
  $contact = $_POST['contact'];

  $password = md5($password);

  include 'dbcon.php';

  $qry = "INSERT INTO members (fullname, username, password, dor, services, amount, plan, address, gender, contact, status) VALUES ('$fullname', '$username', '$password', CURRENT_TIMESTAMP, '$services', '0', '$plan', '$address', '$gender', '$contact', 'Pending')";
  $result = mysqli_query($con, $qry);

  if (!$result) {
    ?>

    
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title">
              <span class="icon"><i class="icon-info-sign"></i></span>
              <h5>Error Message</h5>
            </div>
            <div class="widget-content">
              <div class="error_ex">
                <h1 style="color: maroon;">Error 404</h1>
                <h3>Error occurred while entering your details</h3>
                <p>Please try again</p>
                <a class="btn btn-warning btn-big" href="../pages/index.php">Go Back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  } else {
    ?>
    <div class="container-fluid">
      <div class="row-fluid">
        <div class="span12">
          <div class="widget-box">
            <div class="widget-title">
              <span class="icon"><i class="icon-info-sign"></i></span>
              <h5>Message</h5>
            </div>
            <div class="widget-content">
              <div class="error_ex">
                <h1>Success</h1>
                <h3>Member details have been added!</h3>
                <p>The requested details have been added. <u> <b>Please wait for verification.</b> </u> </p>
                <a class="btn btn-inverse btn-big" href="../index.php">Go Back</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?php
  }
} else {
  echo "<h3>You are not authorized to redirect this page. Go back to <a href='index.php'>dashboard</a>.</h3>";
}
?>                                    </form>
</body>

<!--end-Footer-part-->

<script src="../js/excanvas.min.js"></script> 
<script src="../js/jquery.min.js"></script> 
<script src="../js/jquery.ui.custom.js"></script> 
<script src="../js/bootstrap.min.js"></script> 
<script src="../js/jquery.flot.min.js"></script> 
<script src="../js/jquery.flot.resize.min.js"></script> 
<script src="../js/jquery.peity.min.js"></script> 
<script src="../js/fullcalendar.min.js"></script> 
<script src="../js/matrix.js"></script> 
<script src="../js/matrix.dashboard.js"></script> 
<script src="../js/jquery.gritter.min.js"></script> 
<script src="../js/matrix.interface.js"></script> 
<script src="../js/matrix.chat.js"></script> 
<script src="../js/jquery.validate.js"></script> 
<script src="../js/matrix.form_validation.js"></script> 
<script src="../js/jquery.wizard.js"></script> 
<script src="../js/jquery.uniform.js"></script> 
<script src="../js/select2.min.js"></script> 
<script src="../js/matrix.popover.js"></script> 
<script src="../js/jquery.dataTables.min.js"></script> 
<script src="../js/matrix.tables.js"></script>