<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>
<?php $dat=strtotime("today"); ?>

<div class="container">

     <div class="row " >
       <div class="col-md-12" style="text-align: center;color:blue;">
<h3>Attendance for course <?php echo $course_id; ?> of
<?php echo date("   Y-m-d h:i:sa", $dat); ?> </h3>
  
    </div>

  </div>  
    <div class="container">

     <div class="row">
       <div class="col-md-6" style="padding-top: 20px">
       	
       	<!-- Trigger the modal with a button -->
  <!-- ############################ MODAL TO COLLECT ATTENDANCE BY STUDENTS -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal">CLICK TO SUBMIT YOUR ID</button>

<!-- Modal -->

<div id="myModal"  class="modal fade" role="dialog" > 
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close"   data-dismiss="modal">&times;</button> <!-- button close   -->
        <h4 class="modal-title"><h3>Attendance for:</h3><b>COURSE:</b><?php echo $course_id; ?>   
        <b> DATE:</b><?php echo date("Y-m-d h:i:sa", $dat); ?>    
        
        </h4>
      </div>
      <div class="modal-body">
        <form action="take.php" method="POST">
        <label>Type in Your Student ID and Press Submit:</label> <input type="text" name="myid"><input type="submit" value="submit">

        </form>

       

 
       <!--####################PROCESS FORM DATA TO SUBMIT TO DATABASE   -->
  <?php
  $con = mysqli_connect("localhost","root","","attendance");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

	$myid=$_POST['myid']; 
	$course=$course_id;
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql="INSERT INTO attendance (student_id,remark) VALUES('$myid',1)  ";
  $result=mysqli_query($con,$sql);
  
   }
   ?>
   
   <!-- #################END OF ATTENDANCE PROCESSING FORM ################   -->
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
       <div class="col-md-6" style="padding-top: 20px">
       	<!-- ####################################################################### MODAL TO COLLECT ATTENDANCE BY ADMIN -->
       	<!-- Trigger the modal with a button -->
<button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal2">TICK AND SUBMIT FROM COURSE LIST</button>

<!-- Modal -->
<div id="myModal2" class="modal fade" role="dialog">
  <div class="modal-dialog modal-lg">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Class Attendance for Date and Time</h4>
      </div>
      <!--#######################################################Table to hold list of students enrolled -->
      <div class="modal-body">

        <?php 

        ?>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>
       </div>
      

      </div>
    </div>

   <?php include("includes/footer.php"); ?>