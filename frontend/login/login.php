<?php session_start(); 
$con = mysqli_connect("localhost","root","12qwaszx","pollution") or die(mysqli_error($con));
if(isset($_SESSION['id']))
header("Location: http://127.0.0.1/Hackathon/frontend/index.php")
?>



<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<title>Login Webpage</title>
<link rel="stylesheet" href="css/style.css">
  <style>
	a:link {color:#ff0000;}
	a:visited {color:#0000ff;}
	a:hover {color:#ffcc00;}
	body {text-align: justify;}
  </style>  
</head>
<body>
<div>
<form action="login_submit.php" method="post" id="logsing">
<div class="login-wrap">                             
	<div class="login-html">			
		<input id="tab-1" type="radio" name="tab" class="sign-in" checked><label for="tab-1" class="tab">LOG IN</label>
		<input id="tab-2" type="radio" name="tab" class="sign-up"><label for="tab-2" class="tab">SIGN UP</label>
		<div class="login-form">
			<div class="sign-in-htm">
				<div class="group">
					<label for="user" class="label">USERNAME</label>
					<input name="username" id="user" type="text" class="input" minlength="5" title="Minimum length 5">
				</div>
				<div class="group">
					<label for="pass" class="label">PASSWORD</label>
					<input name="pass" id="pass" type="password" class="input" data-type="password">
				</div>
				<br>
				<div class="group">
					<input type="submit" class="button" value="Sign In" onclick="modelog()">
				</div>
				<div class="hr"></div>
                 <?php if(filter_input(INPUT_GET, 'error') != null){
                    $error = filter_input(INPUT_GET,'error'); echo '<div><b>'.$error.'</b></div>';
                }?>
			</div>
			<div class="sign-up-htm">
                <div class="group">
					<label for="pass" class="label">Name</label>
					<input name="name" id="pass" type="text" class="input">
				</div>
				<div class="group">
					<label for="user" class="label">User Name</label>
					<input name="user_name" id="user" type="text" class="input">
				</div>
				<div class="group">
					<label for="pass" class="label">Password</label>
					<input name="password" id="pass" type="password" class="input" data-type="password">
				</div>
				<div class="group">
					<label for="pass" class="label">Email Address</label>
					<input name="email" id="pass" type="text" class="input">
				</div>
				<div class="group">
					<input type="submit" class="button" value="Sign Up" onclick="modesign()">
				</div>
                <?php if(filter_input(INPUT_GET, 'error') != null){
                    $error = filter_input(INPUT_GET,'error'); echo '<br/><div><b>'.$error.'</b></div>';
                    }?>
				<div class="hr"></div>
				<div class="foot-lnk">
                    <label for="tab-1">Already Member?</a>
				</div>
			</div>
		</div>
	</div>
</div>
</form>
    <script>
        function modelog(){
            var objLog = document.createElement('INPUT');
            objLog.type = "hidden";
            objLog.name = "mode";
            objLog.value = "login";
            var objForm = document.getElementById("logsing");
            objForm.append(objLog);
            objForm.submit();
        }
        
        function modesign(){
            var objLog = document.createElement('INPUT');
            objLog.type = "hidden";
            objLog.name = "mode";
            objLog.value = "signin";
            var objForm = document.getElementById("logsing");
            objForm.append(objLog);
            objForm.submit();
        }
    </script>
</div>  
</body>

</html>
