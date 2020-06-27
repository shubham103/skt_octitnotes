<?php
session_start(); 
if(!isset($_SESSION['tid']))
{
    header("location:../index.php");
}
include('../conn.php');
?>
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
	<h1 class="w3-xxxlarge" ><b><span class="w3-text-green w3-jumbo"> &nbsp;O</span>CT IT Notes</b></h1>
</div>
<div class=" w3-center w3-hide-large w3-hide-medium   w3-round-xxlarge">
	
	<h1 class="w3-xxlarge w3-black" ><b><span class="w3-text-green w3-xxlarge">O</span>CT IT Notes</b></h1>
	
</div>	
<div class=" w3-gray w3-text-white bgimg" style="width:100%" >
	
	
	<div class="w3-container w3-hide-small w3-hide-medium">
		<button class=" w3-third  w3-black w3-button w3-hover-green " onclick="show('upload','profile');">UPLOAD</button>
		<button class=" w3-third  w3-black w3-button w3-hover-purple "  onclick="show('profile','upload');">PROFILE</button>
		<a href="logout.php" class=" w3-third  w3-black w3-button w3-hover-red ">LOG_OUT</a>
		
	</div>
	<div class="w3-hide-large w3-panel w3-hide-medium">
	<div class="w3-dropdown-hover  ">
		<button class="w3-button w3-black" >&#8801;</button>
	    <div class="w3-dropdown-content w3-black w3-border w3-bar-block">
			<button class=" w3-bar-item   w3-button " onclick="show('upload','profile');">UPLOAD</button>
			<button class=" w3-bar-item   w3-button " onclick="show('profile','upload');"> PROFILE</button>
			<a href="logout.php" class=" w3-bar-item   w3-button ">LOG_OUT</a>
		</div>
	</div>
	</div>
	
	<div id="upload" class="w3-container w3-padding-large">
		
		<center>
			
			<h3><u>UPLOAD NOTES</u></h3>
			<form action="upload.php" method="POST" enctype="multipart/form-data">
				<select name="subject" class="w3-select" style="max-width:500px" required="required">
					<option disabled selected>Select subject</option>			
				<?php
					$qry="SELECT * FROM `subject`";
				  	$run=mysqli_query($con,$qry);
				    if($run){
						while($data=mysqli_fetch_assoc($run)){
							?>
								<option value="<?php echo($data['s_id']);?>"><?php echo($data['s_name']);?></option>
								
							<?php
						}
					}
				?>
				</select>
				<br/><br/>
				<select name="unit" class="w3-select" style="max-width:500px" required="required">
					<option disabled selected>Select unit</option>
					<option value="1"> UNIT-1 </option>
					<option value="2"> UNIT-2 </option>
					<option value="3"> UNIT-3 </option>
					<option value="4"> UNIT-4 </option>
					<option value="5"> UNIT-5 </option>
					
				</select>
				<br/><br/>
				
				<label class="w3-text-yellow"> * file must be pdf and less than 10 MB </label>
                <input class="w3-input" type="file" name="pdf" style="max-width:500px" required>
				<br/>
                  <input type="submit" value="UPLOAD" name="submit" class="w3-input w3-button w3-green" style="max-width:300px">
                  <br/>
                  
			</form>
			<form action="add.php" method="POST">
			    <input type="text" class="w3-input" style="max-width:500px" name="subject" placeholder="enter new subject name">
			    <input type="submit" name="submit" class="w3-button w3-green" value="ADD SUBJECT">
			    
			</form>
		</center>
		
	</div>
	
	<div id="profile" class="w3-container" style="display:none" >
		
		<div class="w3-card-4 w3-center "  width="100%">
			<br/>
			<img src="../images/avatar3.png" alt="TEACHER" class="w3-round-large w3-hide-large w3-hide-medium" style="width:30%">
			<img src="../images/avatar3.png" alt="TEACHER" class="w3-round-large w3-hide-small w3-hide-medium" style="width:10%">
			<center>
				<?php
					$id=$_SESSION['tid'];
				    $qry="SELECT `t_email`, `name` FROM `teacher_log` WHERE `t_id`=$id";
				  	$run=mysqli_query($con,$qry);
				    if($run){
						while($data=mysqli_fetch_assoc($run)){
							?>
				
			<ul class="w3-ul w3-large" style="max-width:500px" >
			    <li><?php  echo($data['name']);?></li>
				<li><?php  echo($data['t_email']); }}?></li>
				<li>subjects :-
				<?php
				    $qry="SELECT DISTINCT `subject`.`s_name` FROM `subject` NATURAL JOIN `t_s` WHERE `t_s`.`t_id`=$id";
				  	$run=mysqli_query($con,$qry);
				    if($run){
						while($data=mysqli_fetch_assoc($run)){
							echo("<span class='w3-text-blue w3-tiny'> @ </span> ".$data['s_name']);
						}
					}
							?>
				</li>
				
				<li id="changebutton"><button class="w3-button w3-green" onclick="document.getElementById('changebutton').style.display='none';document.getElementById('password').style.display='block';">Change password</button></li>
				<li id="password" style="display:none">
				<form action="updatepassword.php" method="post" >
					<input class="w3-input" type="password" name="old" placeholder="old password" required><br>
					<input class="w3-input" type="password" name="new" placeholder="new password" required>
					<br/>
					<input type="submit" name="submit" value="update" class="w3-button w3-green">
					</form>
				</li>
			</ul>
			</center>
				
		</div>
	</div>
	<br/><br/><br/>
	</div>	
	
	
	
<script>
	function show(id1,id2){
		
		document.getElementById(id2).style.display="none";
		document.getElementById(id1).style.display="block";
	}
	
	</script>
</body>
</html>