
<?php
  
  include("../conn.php");
  
?>
<!DOCTYPE html>
<html>
<title>octitnotes</title>
<meta name="theme-color" content="#001a4d" />
<meta charset="UTF-8">
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
     <a href="../index.php"  style="text-decoration: none"><h1 class="w3-xxxlarge" ><b><span class="w3-text-green w3-jumbo"> &nbsp;O</span>CT IT Notes</b></h1>
	 </a>
</div>
<div class=" w3-center w3-hide-large w3-hide-medium   w3-round-xxlarge">
	
	<a href="../index.php"  style="text-decoration: none"><h1 class="w3-xxlarge w3-black" ><b><span class="w3-text-green w3-xxlarge">O</span>CT IT Notes</b></h1></a>
</div>	
<div id="intropage" class="w3-container w3-center w3-text-white bgimg" >
	<br/><br/><br/>
	<center>
	<div class="w3-container w3-margin-left w3-margin-right">
	
	<?php
			
			$subid=$_GET['subject'];
			$qry="SELECT DISTINCT `teacher_log`.`name`,`teacher_log`.`t_id` FROM `teacher_log` NATURAL JOIN `t_s` WHERE `t_s`.`s_id`=$subid AND `teacher_log`.`t_authen`=1";
			$run=mysqli_query($con,$qry);
			if(mysqli_num_rows($run)>0)
			{
                
				while($dat=mysqli_fetch_assoc($run))
				{
					?>
							<a href="uw.php?subject=<?php echo($subid);?>& teacher=<?php echo($dat['t_id']);?>"  style="text-decoration: none">
							<div class="w3-card-2 w3-sand w3-panel w3-hover-green " style="max-width:800px;text-decoration:none;">
								<h3><?php echo($dat["name"]); ?> </h3>
							</div>
							</a>
							
					<?php
				}
			}
	?>
	</div>
	</center>
	</div>
</body>
</html>