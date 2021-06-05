<?php 

  session_start();

  require 'connect.php';
  require 'functions.php';


  if(isset($_POST['register'])) {

    $uname = clean($_POST['username']); 
    $pword = clean($_POST['password']); 
    $studno = clean($_POST['studentno']); 
    $fname = clean($_POST['firstname']); 
    $lname = clean($_POST['lastname']); 
    $course = clean($_POST['course']); 
    $yrlevel = clean($_POST['yrlevel']); 

    $query = "SELECT username FROM students WHERE username = '$uname'";
    $result = mysqli_query($con,$query);

    if(mysqli_num_rows($result) == 0) {

      $query = "SELECT studentno FROM students WHERE studentno = '$studno'";
      $result = mysqli_query($con,$query);

      if(mysqli_num_rows($result) == 0) {

        $query = "INSERT INTO students (username, password, studentno, firstname, lastname, course, yrlevel, date_joined)
        VALUES ('$uname', '$pword', '$studno', '$fname', '$lname', '$course', '$yrlevel', NOW())";

        if(mysqli_query($con, $query)) {

          $_SESSION['prompt'] = "Account registered. You can now log in.";
          header("location:index.php");
          exit;

        } else {

          die("Error with the query");

        }

      } else {

        $_SESSION['errprompt'] = "Email already exists.";

      }

    } else {

      $_SESSION['errprompt'] = "Username already exists.";

    }

  } 

?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">

	<title>Registeration</title>

	<link href="assets/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">

	
    
</head>
<body>

  <?php include 'header.php'; ?>

  <section class="center-text">
   
        <h2><input class="btn btn-primary" value="REGISTRATION PAGE"></h2>


    <div class="registration-form box-center clearfix">

    <?php 
        if(isset($_SESSION['errprompt'])) {
          showError();
        }
    ?>

      <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" method="POST">
        
        <div class="row">
          <div class="account-info col-sm-6">
          
            <fieldset>
              <legend>Enter Login Details</legend>
              
              <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username (must be unique)" required>
              </div>

              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password here" required>
				<span><hr>-</hr>Passport:</span><input type="file" name="file" id="file" required ><br><br>
<div >
              </div>

            </fieldset>
            

          </div>

          <div class="personal-info col-sm-6">
            
            <fieldset>
              <legend>Student Profile</legend>
   <div class="form-group">
                <label for="studentno">Email Address</label>
                <input type="text" class="form-control" name="studentno" placeholder="Email Address" required>
              </div>            
           <i class="icon-dashboard icon-2x"></i> 

              <div class="form-group">
                <label for="firstname">Surname Name</label>
                <input type="text" class="form-control" name="firstname" placeholder="Surname Name" required>
              </div>

              <div class="form-group">
                <label for="lastname">First Name</label>
                <input type="text" class="form-control" name="lastname" placeholder="First Name" required>
              </div>
  
              <div class="form-group">
                <label for="course">Address</label>

                <select class="form-control" name="course">
                  <option value="Sangere">Sangere</option>
                  <option value="SabonGari">Sabon Gari</option>
                  <option value="Hayin Gada">Hayin Gda</option>
                  <option value="Girei">Girei</option>
             
                  
                </select>
   <div class="form-group">
                <label for="phoneno">Phone No</label>
                <input type="text" class="form-control" name="phoneno" placeholder="phone number" required>
              </div>
              </div>

              <div class="form-group">
                <label for="yrlevel">Assignment Level</label>

                <select class="form-control" name="yrlevel">
                  <option>01</option>
                  <option>02</option>
                  <option>03</option>
    
                </select>

              </div>

            </fieldset>
            

          </div>
        </div>

        
        
        <a href="index.php">
		      <input class="btn btn-primary"  name="go back" value="Go Back"></a>
        <input class="btn btn-primary" type="submit" name="register" value="Register">



      </form>
    </div>

  </section>


	<script src="assets/js/jquery-3.1.1.min.js"></script>
	<script src="assets/js/bootstrap.min.js"></script>
</body>
</html>

<?php 

  unset($_SESSION['errprompt']);
  mysqli_close($con);

?>