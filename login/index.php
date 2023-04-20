<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form method="POST">
				<img src="img/avatar.svg">
				<h2 class="title">Login</h2>
           		<div class="input-div one">
           		   <div class="i" class="form" id="form">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div" class="form" id="form">
           		   		<h5>Email@</h5>
           		   		<input type="text" class="input" autocomplete="off" id="email" name="email">
           		   </div>
           		</div>
           		<div class="input-div pass" class="form" id="form">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div" class="form" id="form">
           		    	<h5>Password</h5>
           		    	<input type="password" class="input" autocomplete="off" id="password" name="password">
            	   </div>
            	</div>
            	<a href="./signup.php">Dont have an account?</a>
            	<input type="button" class="btn" class="loginUser" id="btnLoginInside" value="Login" >
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
	<script src="../javaScript/jquery.js"></script>
	<script src="../javaScript/insideTheFolderLogin.js"></script>
</body>
</html>
