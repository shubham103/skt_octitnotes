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
	<div class=" w3-container w3-margin-left w3-margin-right">
	
		<?php
			
			$tid=$_GET['teacher'];
			$subid=$_GET['subject'];
			$qry="SELECT `unit`, `link` FROM `t_s` WHERE `t_id`=$tid AND `s_id`=$subid";
			$run=mysqli_query($con,$qry);
			if(mysqli_num_rows($run)>0)
			{
                
				while($dat=mysqli_fetch_assoc($run))
				{
					?>
							<a class="w3-hide-small w3-hide-medium" href="../data/<?php print_r($dat['link']);?>" target="_blank"  style="text-decoration: none">
							<div class="w3-card-2 w3-sand w3-panel w3-hover-green" style="max-width:800px;">
								<h3><?php echo("unit - ".$dat["unit"]); ?> </h3>
							</div>
							</a>
							
								<a class="w3-hide-large " href="http://docs.google.com/gview?embedded=true&url=octitnotes.000webhostapp.com/data/<?php print_r($dat['link']);?>" target="_blank"  style="text-decoration: none">
							<div class="w3-card-2 w3-sand w3-panel w3-hover-green" style="max-width:800px;">
								<h3><?php echo("unit - ".$dat["unit"]); ?> </h3>
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