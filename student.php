<?php include("includes/header.php"); ?>

<?php include("includes/nav.php"); ?>

<div class="container">
   <div class="row">
      <div class="col-md-8">
         
         <h3>Enter New Student Details</h3>
         <form>
  <div class="form-group">
    <label for="name">Full name</label>
    <input type="text" class="form-control" id="fullname"  placeholder="Enter full name">
    
  </div>
  <div class="form-group">
    <label for="dob">Date of Birth</label>
    <input type="Date" class="form-control" id="date" placeholder="DD/MM/YYYY">
  </div>
   <div class="form-group">
    <label for="nationality">Nationality</label>
    <input type="ttext" class="form-control" id="nationality" placeholder="Enter student nationality">
  </div>
   <div class="form-group">
    <label for="region">Region</label>
    <input type="text" class="form-control" id="region" placeholder="Enter region of origin">
  </div>
  <div class="form-group">
    <label for="city">Region</label>
    <input type="text" class="form-control" id="city" placeholder="Enter city of origin">
  </div>
  <div class="form-group">
    <label for="phone">Region</label>
    <input type="text" class="form-control" id="phone" placeholder="Enter student phone">
  </div>
  <div class="form-group">
    <label for="Address">Address</label>
    <input type="textarea" class="form-control" id="address" placeholder="Enter student address">
  </div>
  
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
      
      </div>
   </div>
</div>




    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
