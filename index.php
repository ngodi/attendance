<?php include("includes/header.php"); ?>
<?php
if(isset($_SESSION['logout'])){ 

session_unset();
session_destroy(); 
}
?>

    <div class="container">

<?php include("includes/login.php"); ?>

<?php include("includes/checklogin.php"); ?>




    </div>
 <div class="footer" style="min-height: 70px;background-color: Gainsboro ;margin-top:320px">   </div>
   <?php include("includes/footer.php"); ?>
