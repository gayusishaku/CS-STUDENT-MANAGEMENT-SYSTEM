<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_POST['update'])) {

    $fname = clean($_POST['firstname']);
    $lname = clean($_POST['lastname']);
    $course = clean($_POST['Address']);
    $yrlevel = clean($_POST['Phone']);

    $query = "UPDATE students SET firstname = '$fname', lastname = '$lname', address = '$address', phone = '$yrphone'
    WHERE id='".$_SESSION['userid']."'";

    if($result = mysqli_query($con, $query)) {

      $_SESSION['prompt'] = "Profile Updated";
      header("location:profile.php");
      exit;

    } else {

      die("Error with the query");

    }

  }

  if(isset($_SESSION['username'], $_SESSION['password'])) {

    $qry = mysqli_query($con,"SELECT * FROM students where id = {$_SESSION['userid']} ");
    $data = mysqli_fetch_array($qry);
    extract($data);

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Edit Profile</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

	
    
</head>
<body>

  <?php include 'header.php'; ?>

  <section>
    
    <div class="container">
      <strong class="title">Edit Profile</strong>
    </div>
    

    <div class="edit-form box-left clearfix">
      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">

        <div class="form-group">
          <label>Student No:</label>
          
          <?php 
            $query = "SELECT studentno FROM students WHERE id = '".$_SESSION['userid']."'";
            $result = mysqli_query($con, $query);
            $row = mysqli_fetch_row($result);

            echo "<p>".$row[0]."</p>";
          ?>

        </div>


        <div class="form-group">
          <label for="firstname">First Name</label>
          <input type="text" class="form-control" name="firstname" value="<?php echo $firstname ?>" placeholder="First Name" required>
        </div>


        <div class="form-group">
          <label for="lastname">Last Name</label>
          <input type="text" class="form-control" name="lastname" value="<?php echo $lastname ?>" placeholder="Last Name" required>
        </div>


        <div class="form-group">
          <label for="address">Address</label>

          <select class="form-control" name="address">
              <option value="Sangere" <?php echo $address == 'Sangere' ? "selected": ""; ?>>Sangere</option>
              <option value="Sabon Gari" <?php echo $address == 'SabonGari' ? "selected": ""; ?>>Sabon Gari</option>
              <option value="Hayin Gada" <?php echo $address == 'HayinGada' ? "selected": ""; ?>>Hayin Gada</option>
              <option value="Girei" <?php echo $address == 'Girei' ? "selected": ""; ?>>Girei</option>
              
              
            </select>

        </div>
 <div class="form-group">
          <label for="phone">Phone No</label>
          <input type="text" class="form-control" name="phone" value="<?php echo $phone ?>" placeholder="phone" required>
        </div>

          

        </div>
        
        <div class="form-footer">
          <a href="profile.php">Go back</a>
          <input class="btn btn-primary" type="submit" name="update" value="Update Profile">
        </div>
        

      </form>
    </div>

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php 

  } else {
    header("location:profile.php");
  }

  mysqli_close($con);

?>