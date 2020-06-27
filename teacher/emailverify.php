<?php session_start(); ?>
<!DOCTYPE html>
<html>
<title>octitnotes</title>
<meta charset="UTF-8">
<meta name="theme-color" content="#001a4d" />
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="../w3.css">

<style>
body,h1,h5 {font-family: "Raleway", sans-serif}
body, html {height: 100%}
.bgimg {
  background-image: url('../images/blur-blurred-blurred-background-1187974.jpg');
  min-height: 90%;
  background-position: center;
  background-size: cover;
}
	
</style>
<body class="w3-sand" >
		
<div class="w3-black w3-wide w3-hide-small w3-round-xxlarge ">
	<a href="../index.php"  style="text-decoration: none"><h1 class="w3-xxxlarge" ><b><span class="w3-text-green w3-jumbo"> &nbsp;O</span>CT IT Notes</b></h1></a>
</div>
<div class=" w3-center w3-hide-large w3-hide-medium   w3-round-xxlarge">
	
	<a href="../index.php"  style="text-decoration: none"><h1 class="w3-xxlarge w3-black" ><b><span class="w3-text-green w3-xxlarge">O</span>CT IT Notes</b></h1></a>
</div>	

<div class="w3-container w3-light-green w3-text-white bgimg" style="width:100%" >
	<div >
		<br/>
		<div class="w3-container w3-center">
			<br/>
			<!-- for large screen -->
			<div class="w3-card-4 w3-center w3-hide-small w3-large-medium" style="width:100%">
				
				<img src="../images/avatar3.png" alt="TEACHER" class="w3-round-large" style="width:10%">
				<div class="w3-container w3-center">
					<h4><span class="w3-text-yellow">*</span> verification code is send to<br>registered email id 	</h4>
				<form action="authenticate.php" method="post">
					<input type="text" value="<?php echo($_GET['id'])?>" name="id" class="w3-hide" >
					<div class="w3-display-container"><input class="w3-input w3-display-middle w3-center" name="authen" type="text" placeholder=" enter verification code" required style="max-width:300px;" ><br/><br/><br/></div>
					<input class="w3-button w3-green" name="submit" type="submit" value="VERIFY">
					<br/><br/>
					<a href="loginportal.php" class="w3-text-blue w3-hover-text-white">Login</a> or 
					<a href="signupportal.php" class="w3-text-blue w3-hover-text-white">Signup</a><br/><br/>
				</form>
				</div>
				
			</div>
			<!-- for small screen -->
			<div class="w3-card-4 w3-center w3-hide-medium w3-hide-large" style="width:100%">
				
				<img src="../images/avatar3.png" alt="TEACHER" class="w3-round-large" style="width:60%">
				<div class="w3-container w3-center">
					<h6><span class="w3-text-yellow">*</span> verification code is send to<br>registered email id 	</h6>
				<form action="authenticate.php" method="post">
					<input type="text" value="<?php echo($_GET['id'])?>" name="id" class="w3-hide" >
					<input class="w3-input  w3-center" name="authen" type="text" placeholder="verification code" required ><br/>
					<input class="w3-button w3-green" name="submit" type="submit" value="VERIFY">
					<br/><br/>
					<a href="loginportal.php" class="w3-text-blue w3-hover-text-white">Login</a> or 
					<a href="signupportal.php" class="w3-text-blue w3-hover-text-white">Signup</a>
					<br/>
				</form>
				</div>
				
			</div>
			
		</div>
		<br/><br/><br/>
	</div>
</div>
</body>
</html>