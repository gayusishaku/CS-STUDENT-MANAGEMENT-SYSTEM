<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';

  if(isset($_SESSION['username'], $_SESSION['password'])) {

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Student Profile</title>

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">
	<link href="assets/css/main.css" rel="stylesheet">

	
</head>
<body>
 
  <?php include 'header.php'; ?>

  <section>

    <div class="options">
      <strong class="title">User Profile</strong>
    </div>
    
 
 <table bgcolor="red" border="2"  style="width:100px" height="160px">
 
 <tr>
 <td>Passport</td>
 </table>
 
      <?php

        if(isset($_SESSION['prompt'])) {
          showPrompt();
        }


        $query = "SELECT * FROM students WHERE username = '".$_SESSION['username']."' AND password = '".$_SESSION['password']."'";

        ;

        if($result = mysqli_query($con, $query)) {

          $row = mysqli_fetch_assoc($result);

          echo "<div class='info'><strong><button>Email Address</button>:</strong> <span>".$row['studentno']."</span></div>";
          echo "<div class='info'><strong><button>Student Name</button>:</strong> <span>".$row['lastname'].", ".$row['firstname']."</span></div>";
		  
		  
		  
          echo "<div class='info'><strong><button>Address</button>:</button></strong> <span>".$row['course']."</span></div>";
          echo "<div class='info'><strong><button>Phone No</button>:</strong> <span>".$row['yrlevel']."</span></div>";
		  

          $query_date = "SELECT DATE_FORMAT(date_joined, '%m/%d/%Y') FROM students WHERE id = '".$_SESSION['userid']."'";
          $result = mysqli_query($con, $query_date);

          $row = mysqli_fetch_row($result);

          echo "<div class='info'><strong><button>Date Joined</button>:</strong> <span>".$row[0]."</span></div>";

        } else {

          die("Error with the query in the database");

        }

      ?>

      <div class="options">
        <a class="btn btn-primary" href="editprofile.php">Edit Profile</a>
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