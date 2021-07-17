<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>
	<title>Profile - Student Information System</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">


</head>
<body>

  <?php include 'header.php'; ?>

  <section>

    <div class="container">
      <strong class="title">My Profile</strong>  <a class="btn btn-primary" href="homechat.php">Join Group Chat</a>
    </div>
     
    
    <div class="profile-box box-left">
<center><img src="../uploads/<?php echo $row['file'];?>" class="roundimage2"  alt=""/>
<br><br>   
      <?php
     
        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }


        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";

        ;

        if($result = mysqli_query($con, $query)) {

          $row = mysqli_fetch_assoc($result);

          echo "<div class='info'><strong>Mobile No:</strong> <span>".$row['studentno']."</span></div>";
		  
		  
          echo "<div class='info'><strong>Student Name:</strong> <span>".$row['lastname'].", ".$row['firstname']."</span></div>";
		  
		  
         echo "<div class='info'><strong>Student Email:</strong> <span>".$row['email']."</span></div>";
         echo "<div class='info'><strong>Student Address:</strong> <span>".$row['address']."</span></div>";

          $query_date = "SELECT DATE_FORMAT(date_joined, '%m/%d/%Y') FROM students WHERE id = '".$_SESSION['userid']."'";
          $result = mysqli_query($con, $query_date);

          $row = mysqli_fetch_row($result);

          echo "<div class='info'><strong>Date Joined:</strong> <span>".$row[0]."</span></div>";

        } else {

          die("Error with the query in the database");

        }

      ?>
      
      <div class="options">
        <a class="btn btn-primary" href="editprofile.php">Edit Profile</a>
        <a class="btn btn-success" href="changepassword.php">Change Password</a>
      </div>

      
    </div>

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
  <script src="assets/js/bootstrap.min.js"></script>
	<script src="assets/js/main.js"></script>
</body>
</html>

<?php


  } else {
    header("location:index.php");
    exit;
  }

  unset($_SESSION['prompt']);
  mysqli_close($con);

?>