<?php include("includes/header.php"); ?>
<?php include("includes/nav.php"); ?>


<div class="container" style="padding-top: 20px">
  <div class="row">
     <!-- course code entering field ---------------------------- -->
     <div class="col-md-8">
      <table >
        <tr>
            <form action="admin_panel.php" method="POST">
          <td  style="padding:5px"><b>Enter Course code:</b></td>
          <td  style="padding:5px"><input type="text" name="cscode" placeholder="e.g CS400 for Algorithms course"></td>
          <td  style="padding:5px"> <input type="submit" value="select & start"> </td>
            </form>

      
        </tr>
  <!-- course select field ---------------------------------- -->


<?php
 
$con = mysqli_connect("localhost","root","","attendance");

if($_SERVER['REQUEST_METHOD'] == 'POST'){

  $course_id=$_POST['cscode'];

  $_SESSION['course_id'] = $course_id;
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }

  $sql="SELECT * FROM courses WHERE course_code='$course_id'";
  $result=mysqli_query($con,$sql);
  $row=mysqli_fetch_assoc($result);
  if(!empty($row['course_code'])){
  header("location:take.php");
    }
    else{
      
      echo "<script type='text/javascript'>alert('Code not recognized')</script>";

    }
   }





?>



 




</div>



<?php include("includes/footer.php"); ?>