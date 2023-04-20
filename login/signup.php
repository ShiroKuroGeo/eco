<!DOCTYPE html>
<html>
<head>
	<title>Signup</title>
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
				<h2 class="title">Signup</h2>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div"class="form" id="form">
           		   		<h5>Firstname</h5>
           		   		<input type="text" class="input" name="Firstname" id="Firstname" required >
           		   </div>
           		</div>
                   <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div"class="form" id="form">
                            <h5>Lastname</h5>
                            <input type="text" class="input" name="Lastname" id="Lastname"required  >
                    </div>
                 </div>
                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-user"></i>
                    </div>
                    <div class="div"class="form" id="form">
                            <h5>Username</h5>
                            <input type="text" class="input"name="Username" id="Username"required >
                    </div>
                 </div>

                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-envelope"></i>
                    </div>
                    <div class="div"class="form" id="form">
                            <h5>Email</h5>
                            <input type="text" class="input" name="Email" id="Email"required >
                    </div>
                 </div>

                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-address-card"></i>
                    </div>
                    <div class="div"class="form" id="form">
                            <h5>Complete Address</h5>
                            <input type="text" class="input"name="Address" id="Address"required >
                    </div>
                 </div>

                 <div class="input-div one">
                    <div class="i">
                            <i class="fas fa-phone"></i>
                    </div>
                    <div class="div"class="form" id="form">
                            <h5>Phone</h5>
                            <input type="text" class="input"  name="phone" id="phone"required >
                    </div>
                 </div>

  <div class="input-div pass">
    <div class="i"> 
         <i class="fas fa-lock"></i>
    </div>
    <div class="div"class="form" id="form">
         <h5>Password</h5>
         <input type="password" class="input" autocomplete="off"name="Password" id="Password"required >
 </div>
</div>

<div class="input-div pass">
    <div class="i"> 
         <i class="fas fa-lock"></i>
    </div>
    <div class="div"class="form" id="form">
         <h5>Retype Password</h5>
         <input type="password" class="input" autocomplete="off" name="retypePassword" id="retypePassword"required >
 </div>
</div>
                
            	<a href="index.php">Already have an account?</a>
            	<input type="button" class="btn" id="btnRegister" value="Signup">
            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
    <script src="../javaScript/jquery.js"></script>
        <script src="../javaScript/UserRegister.js"></script>
</body>
</html>
