<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous"/>
<style>
@CHARSET "UTF-8";
.progress-bar {
    color: #333;
} 

* {
    -webkit-box-sizing: border-box;
	   -moz-box-sizing: border-box;
	        box-sizing: border-box;
	outline: none;
}

    .form-control {
	  position: relative;
	  font-size: 16px;
	  height: auto;
	  padding: 10px;
		@include box-sizing(border-box);

		&:focus {
		  z-index: 2;
		}
	}

body {
	background: no-repeat center center fixed;
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: cover;
    background-color: #f0ffff;
}

.register-form {
	margin-top: 60px;
}

form[role=register] {
	color: #5d5d5d;
	background: #dcdcdc;
	padding: 26px;
	border-radius: 10px;
	-moz-border-radius: 10px;
	-webkit-border-radius: 10px;
}
	form[role=register] img {
		display: block;
		margin: 0 auto;
		margin-bottom: 35px;
	}
	form[role=register] input,
	form[role=register] button {
		font-size: 18px;
		margin: 16px 0;
	}
	form[role=register] > div {
		text-align: center;
	}
	
.form-links {
	text-align: center;
	margin-top: 1em;
	margin-bottom: 50px;
}
	.form-links a {
		color: #fff;
	}

.text-primary{
	color: red;
	font-family: sans-serif;
}

.logo{
	display: block;
	margin-left: auto;
	margin-right: auto;
	margin-top: 50px;
	margin-bottom: -25px;
}

.subtitle{
	text-align: center;
	margin-bottom: 25px;
	margin-top: 0px;
	color: #000000;
	font-weight: 600;
	font-size: 40px;
}

</style>

<?php

require_once("config.php");

if(isset($_POST['registrasi'])){

    $nama = filter_input(INPUT_POST, 'nama', FILTER_SANITIZE_STRING);
    $tgl_lahir = filter_input(INPUT_POST, 'tgl_lahir', FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING);
    $username = filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING);
    $password = password_hash($_POST["password"], PASSWORD_DEFAULT);

    $sql = "INSERT INTO user (nama, tgl_lahir, email, username, password) VALUES (:nama, :tgl_lahir, :email, :username, :password)";
    $stmt = $db->prepare($sql);

    $params = array(
        ":nama" => $nama,
        ":tgl_lahir" => $tgl_lahir,
        ":email" => $email,
        ":username" => $username,
        ":password" => $password
    );

    $saved = $stmt->execute ($params);

    if($saved) header("Location: login.php");
}
?>

<head>
	<title>Sibera Sign-up</title>
	<meta http-equiv="x-ua-compatible" content="ie=edge" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<link rel="stylesheet" href="./css/bootstrap.css" />
</head>

<div class="container-fluid">
  <div class="row" id="pwd-container">
	<img class="logo" src="images\logo.png">
    <div class="col-md-4"></div>
    <div class="col-md-4">
      <section class="register-form">
        <form method="post" action="config.php" role="register">
          <h3 class="subtitle"> Sign Up</h5>
          <input type="full-name" name="full-name" placeholder="Full Name" required class="form-control input-lg"  />
		  <input type="date" name="date" placeholder="Birth Date" required="form-control input-lg" /> Birth Date
          <input type="email" name="email" placeholder="Email" required class="form-control input-lg"  />
          <input type="username" name="username" placeholder="Username" required class="form-control input-lg"  />
          <input type="password" class="form-control input-lg" id="password" placeholder="Password" required="" />
          <input type="password" class="form-control input-lg" id="cpassword" placeholder="Password Confirm" required="" />
          
          
          <div class="pwstrength_viewport_progress"></div>
          
          
          <button type="submit" name="go" class="btn btn-lg btn-primary btn-block">Sign Up</button>
          <div>
          	Sudah punya akun?
          	<a href="login.php">Login</a>            
          </div>
          
        </form>
        
      </section>  
      </div>
      
      <div class="col-md-4"></div>
      

  </div>
   
  
  
</div>