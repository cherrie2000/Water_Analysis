<!DOCTYPE html>
<html>

<head>
	<title>Login | CGWB</title>

	<link rel="stylesheet" type="text/css" href="loginpage\css\style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" href="assets\img\CGWBLogo-removebg-preview.png" type="image/x-icon"/>
</head>

<body>

	<img class="wave" src="loginpage\img\wave.png">
	<div class="container">
		<div class="img">
			<img src="loginpage\img\bg.svg">
			
		</div>
		<div class="login-content">
			<form action="login.php" method="post">
				<img src="loginpage\img\CGWBLogo-removebg-preview.png">
				<h2 class="title">Welcome</h2>
				<div class="input-div one">
					<div class="i">
						<i class="fas fa-user"></i>
					</div>
					<div class="div">
						<h5>Username</h5>
						<input type="text" name="uname" class="input">
					</div>
				</div>
				<div class="input-div pass">
					<div class="i">
						<i class="fas fa-lock"></i>
					</div>
					<div class="div">
						<h5>Password</h5>
						<input type="password" name="password" class="input">
					</div>
				</div>
				<a href="#">Forgot Password?</a>
				<input type="submit" class="btn">
			</form>
		</div>
	</div>
	<script type="text/javascript" src="loginpage/js/main.js"></script>


	<?php if (isset($_GET['error'])) { ?>
		<p class="error"><?php echo $_GET['error']; ?></p>
	<?php } ?>

</body>

</html>