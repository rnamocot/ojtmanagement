<!DOCTYPE html>
<html>
  <head>    
    <meta charset="UTF-8">
    <title>Login</title>
    <meta name="Portfolio" content="System">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1"/>
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
<div class="stud-main-wrapper">
	<!--content-->
		<div class="content-wrapper">
			<div class="row" id="student-reg-section">		

				<div class="col-xs-12 col-sm-12 col-md-12" id="stud-content">
					<form action="/action_page.php">
						<div class="container">
						<h1> Student Registration</h1>
						<p>Please fill in this form to create an account.</p>			
						<input type="text" placeholder="Full Name" name="name" id="name" required>
						
						<input type="text" placeholder="User Name" name="username" id="username" required>
						
						<input type="text" placeholder="Student ID" name="stud-id" id="stud-id" required>
						
						<input type="text" placeholder="School" name="school" id="school" required>
						
						<input type="text" placeholder="Email" name="email" id="email" required>

						<input type="password" placeholder="Enter Password" name="psw" id="psw" required>

						<input type="password" placeholder="Repeat Password" name="psw-repeat" id="psw-repeat" required>

						<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>

						<button type="submit" class="registerbtn">Register</button>
						</div>
			  
						  <div class="container signin">
							<p>Already have an account? <a href="#">Sign in</a>.</p>
						  </div>
					</form>
				</div>											
			</div><!--end of login section-->
			</div><!--end of content wrapper-->
</div><!--end of main wrapper-->
</body>

</html>