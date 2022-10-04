<?php
use Phppot\Member;

if (! empty($_POST["login-btn"])) {
    require_once __DIR__ . '/Model/Member.php';
    $member = new Member();
    $loginResult = $member->loginMember();
}
?>
<HTML>
	<HEAD>
		<TITLE>Login</TITLE>
		<link href="assets/10.jpg"rel="shortcut icon"/>
		<link href="assets/css/phppot-style.css" type="text/css"rel="stylesheet" />
		<link href="assets/css/user-registration.css" type="text/css"rel="stylesheet" />
		<script src="vendor/jquery/jquery-3.3.1.js" type="text/javascript"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<style>
	body{
        background-image:url("./assets/n3.jpg");
        background-position: center; 
		background-repeat: no-repeat; 
		background-size: cover;}

		.form-label{
		color:white !important;
		}
		#login-btn{
			color:white;
			font-weight:bold;
			background: #343a40;
		}
		.sign-up-container{
		background-color: transparent;
		}


</style>

</HEAD>

<BODY>
	
	<div class="phppot-container">
		<div class="sign-up-container">
			
			<div class="signup-align">
				<form name="login" action="" method="post"onsubmit="return loginValidation()">

					<div class="signup-heading"  style="color:white;">Login</div>
					<?php if(!empty($loginResult)){?>
						<div class="error-msg"><?php echo $loginResult;?></div>
							<?php }?>
					<div class="row">
						<div class="inline-block">
							
							<input class="input-box-330" type="text" name="username"
								placeholder="name" id="username">
						</div>
					</div>
					<div class="row">
						<div class="inline-block">
							
							<input class="input-box-330" type="password"
								name="login-password" id="login-password" placeholder="password">
						</div>
					</div>
					<div class="row">
						<input class="btn btn-dark" type="submit" name="login-btn"
							id="login-btn" value="Login Now"> <br>
							<div style="color:white;">
								Already have an account ? 
								<a class="" href="user-registration.php" ><i>sign up</i></a> 
							</div>
					</div>
				</form>
			</div>
		</div>
	</div>
	<div class="text-center">
	<a class=" btn btn-success" href="index.php" style="color:white">HOME</a>
	</div>

	<script>
function loginValidation() {
	var valid = true;
	$("#username").removeClass("error-field");
	$("#password").removeClass("error-field");

	var UserName = $("#username").val();
	var Password = $('#login-password').val();

	$("#username-info").html("").hide();

	if (UserName.trim() == "") {
		$("#username-info").html("required.").css("color", "#ee0000").show();
		$("#username").addClass("error-field");
		valid = false;
	}
	if (Password.trim() == "") {
		$("#login-password-info").html("required.").css("color", "#ee0000").show();
		$("#login-password").addClass("error-field");
		valid = false;
	}
	if (valid == false) {
		$('.error-field').first().focus();
		valid = false;
	}
	return valid;
}
</script>
</BODY>
</HTML>