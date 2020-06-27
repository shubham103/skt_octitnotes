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
				<form action="login.php" method="post">
					<br/><br/>
					<div class="w3-display-container">	<input class="w3-input w3-display-middle w3-center" name="email" type="email" placeholder="email" required style="max-width:300px;" ><br/><br/><br/></div>
					<div class="w3-display-container"><input class="w3-input w3-display-middle w3-center" style="max-width:300px;" name="password" type="password" placeholder="password" required><br/><br/><br/><br/></div>
					<input class="w3-button w3-green" name="submit" type="submit" value="LOGIN">
					<br/>
					<a href="signupportal.php" class="w3-text-blue w3-hover-text-white"><h4>New user</h4></a>
				</form>
				</div>
				
			</div>
			<!-- for small screen -->
			<div class="w3-card-4 w3-center w3-hide-medium w3-hide-large" style="width:100%">
				
				<img src="../images/avatar3.png" alt="TEACHER" class="w3-round-large" style="width:60%">
				<div class="w3-container w3-center">
				<form action="login.php" method="post">
					<br/>
					<input class="w3-input  w3-center" name="email" type="email" placeholder="email" required ><br/>
					<input class="w3-input w3-center"  name="password" type="password" placeholder="password" required><br/>
					<input class="w3-button w3-green" name="submit" type="submit" value="LOGIN">
					<br/>
					<a href="signupportal.php" class="w3-text-blue w3-hover-text-white"><h4>New user</h4></a>
				</form>
				</div>
				
			</div>
			
		</div>
	</div>
	<br/><br/><br/>
</div>
</body>
</html>