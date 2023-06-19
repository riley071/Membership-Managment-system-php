
<!DOCTYPE html>
<html lang="en">
<head>
<title>Membership Management System</title>
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
<body><!-- Visit codeastro.com for more projects -->

<!--Header-part-->
<div id="header">
  <h1><a href="index.php">Member System</a></h1>
</div>
<!--close-Header-part--> 


<!--top-Header-menu-->
<?php include '../includes/topheader.php'?>
<!--close-top-Header-menu-->
<!--sidebar-menu-->
<?php $page="report1"; include '../includes/sidebar.php'?>
<!--sidebar-menu-->




<!--main-container-part-->
<div id="content">
  <div id="content-header">
    <div id="breadcrumb"> <a href="index.php" title="Go to Home" class="tip-bottom"><i class="icon-home"></i> Home</a> <a href="my-report.php" class="current">My Report</a> </div>
  </div>
  <!-- <div class="container-fluid">
    <div class="row-fluid">
      <div class="span12"> -->
        <div class="widget-box">
        <div class="container-fluid print-container"> 
        <div class="row-fluid">
      <div class="span12">
	          <div class="widget-box">
        <?php
    include 'dbcon.php';
    include "session.php";
    // $id=$_GET['id'];
    $qry= "select * from members WHERE user_id='".$_SESSION['user_id']."'";
    $result=mysqli_query($con,$qry);
    while($row=mysqli_fetch_array($result)){
?> 
          <div class="widget-content">
            <div class="row-fluid">
              <div class="span4">
                <table class="">
                
                  <tbody>
                 
                    <tr>
                  
                   <img src="../img/icontest3.png" width="240px;" alt="">
            
                    </tr>
                    <tr>
                    <td><h4>Congoma Membership System</h4></td>
                    </tr>
                    
                    <tr>
                      <td>Tel: 231-267-6011</td>
                    </tr>
                    <tr>
                      <td >Email: support@congoma.com</td>
                    </tr>
                    <tr>
                      <td >Address: Post office box 4905</td>
                    </tr>
                  </tbody>
                </table>
              </div>
              
              <div class="span8">
               
                <table class="table table-bordered table-invoice-full">
                  <tbody>
                    <tr>
                      <td class="msg-invoice" width="55%"> <div class="text-center"><h4>CERTIFICATE OF MEMBERSHIP</h4>
                      
                <h5>is here by granted to<br/></h5><h1><?php echo $row['fullname']; ?></h1><p>To certify that they are a member of the council for <br/>non governmental organisation on malawi (CONGOMNA)</p>
              
                        
                        </div>
                    </tr>
                  </tbody>
                </table>
              </div> <!-- end of span 12 -->
              
            </div>
           
                <em><a href="#" class="tip-bottom" title="Registration Date" style="font-size:15px;">Date Granted: <?php echo $row['dor']; ?> </a></em> </td>
            <div class="row-fluid">
              
                <div class="pull-left">
               
                <div class="pull-left">
                <h4><span>Chair Person</h4>
                  <img src="../img/report/stamp-sample.png" width="124px;" alt=""><p class="text-center"></p> </div>
              </div>
                <div class="pull-right">
                  <h4><span>Executive Director:</h4>
                  <img src="../img/report/stamp-sample.png" width="124px;" alt=""><p class="text-center"></p> </div>
                  
            </div>
          </div>
          
        </div>
      </div>
    </div>
    <?php
}
      ?>
      
  </div>
  <div class="text-center">
    <button class="btn btn-danger" onclick="window.print()"><i class="fas fa-print"></i> Print</button>
  </div>
</div>

</div>
<!--end-main-container-part-->

<!--Footer-part-->

<div class="row-fluid">
  <div id="footer" class="span12"> <?php echo date("Y");?> &copy; Developed By zerhoda mahommed</a> </div>
</div>



<style>
#footer {
  color: white;
}

@media print {
  body * {
    visibility: hidden;
  }

  .print-container, .print-container * {
    visibility: visible;
  }

  .print-container {
    position: absolute;
    left: 0px;
    top: 0px;
    right: 0px;
  }
}
</style>

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

<script type="text/javascript">
  // This function is called from the pop-up menus to transfer to
  // a different page. Ignore if the value returned is a null string:
  function goPage (newURL) {

      // if url is empty, skip the menu dividers and reset the menu selection to default
      if (newURL != "") {
      
          // if url is "-", it is this page -- reset the menu:
          if (newURL == "-" ) {
              resetMenu();            
          } 
          // else, send page to designated URL            
          else {  
            document.location.href = newURL;
          }
      }
  }

// resets the menu selection upon entry to this page:
function resetMenu() {
   document.gomenu.selector.selectedIndex = 2;
}
</script>
</body>
</html>
