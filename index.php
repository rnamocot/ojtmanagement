<?php
// Start the session and include the database connection code
session_start();
include_once("./config/ojt_database.php");
$con = connectionDB();

// If the user has submitted the login form
if (isset($_POST['login'])) {
  // Sanitize the user input
  $username = mysqli_real_escape_string($con, $_POST['username']);
  $password = mysqli_real_escape_string($con, $_POST['password']);

  // Get the user from the database
  $sql = " SELECT * FROM `ojt_users` WHERE ojt_username='$username' AND ojt_password='$password'";
  $result = mysqli_query($conn, $sql);
  $user = mysqli_fetch_assoc($result);

  // Validate the input and check the password
  if (empty($username) || empty($password)) {
    $_SESSION['error'] = "Please fill in all fields.";
  } elseif (!$user) {
    $_SESSION['error'] = "User not found.";
  } elseif (!password_verify($password, $user['password'])) {
    $_SESSION['error'] = "Password incorrect.";
  } else {
    // Set the user's session
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['username'] = $user['username'];
    header('Location: index.php');
    exit;
  }
}
?>
<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8">
	<title>Login</title>
	<meta name="Portfolio" content="System">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1" />
	<!--<link rel="shortcut icon" href="img/favicon.png"> for favicon-->
	<!-- Bootstrap -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

	<!-- Custom stylesheet -->
	<link href="css/style.css" rel="stylesheet">
	<link rel="icon" type="image/x-icon" href="./images/toga.png">
	<!--googlefont-->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@200;300;700;800&display=swap" rel="stylesheet">
</head>

<body>
	<div class="main-wrapper page-login">
		<!--content-->
		<div class="content-wrapper loginpage-sec">
			<div class="row" id="login-section">

				<div class="col-xs-12 col-sm-6 col-md-6" id="left-content">
					<div class="icon-login">
						<img src="./images/toga.png" id="icon-toga" alt="toga">
					</div>
					<h1>Welcome</h1>
					<p>You are on your way to becoming excellent educators and mentors for the next generation. As you embark on this journey, we wish you all the best and hope that you gain valuable insights, knowledge, and experience that will help you in your future careers.</p>
				</div>
				<div class="col-xs-12 col-sm-6 col-md-6" id="right-content">
					<div class="signin-heading">
					<h2>Sign in</h2>
					</div>
					<form action="#" method="post">
						<div class="form-inner-container">
							<input type="text" placeholder="Username" name="username" required>

							<input type="password" placeholder="Password" name="password" required>

							<button type="submit" name="btn-login">Login</button>
						</div>
						<div class="forgot-reg">
							<span class="psw">Forgot <a href="#">password?</a></span>
							<div class="signup-div">
								<span>Don't have an account? <a href="#" type="button" class="reg-btn btn-primary" data-bs-toggle="modal" data-bs-target="#register">Sign up</a></span>
							</div>
					</form>
				</div>
			</div>
		</div><!--end of login section-->
	</div><!--end of content wrapper-->
	</div><!--end of main wrapper-->
	<!-- The Modal -->
	<div class="modal fade" id="register">
		<div class="modal-dialog">
			<div class="modal-content">

				<!-- Modal Header -->
				<div class="modal-header">
					<h1>Registration</h1>
					<button type="button" class="btn-close" data-bs-dismiss="modal"></button>
				</div>

				<!-- Modal body -->
				<div class="modal-body">
					<form action="/action_page.php">
						<div class="container">
							<p>Please fill in this form to create an account.</p>
							<input type="text" placeholder="Enter Name" name="name" id="name" required>

							<input type="text" placeholder="Enter User Name" name="fusername" id="username" required>

							<input type="text" placeholder="Enter Email" name="femail" id="email" required>

							<input type="password" placeholder="Enter Password" name="fpassword" id="psw" required>

							<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

							<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

							<button type="submit" class="btn-registerbtn">Register</button>
						</div>

						<div class="container signin">
							<p>Already have an account? <a href="#">Sign in</a>.</p>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</body>

</html>
