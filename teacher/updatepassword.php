<?php session_start();
   include("../conn.php");
   
    if(isset($_SESSION['tid']))
     {
	   
		if(isset($_POST['submit']))
               {
			$old=mysqli_real_escape_string($con,$_POST['old']);
			$new=mysqli_real_escape_string($con,$_POST['new']);
			$qry1="SELECT `t_id` FROM `teacher_log` WHERE `t_pass`=$old";
			$run1=mysqli_query($con,$qry1);
			if(mysqli_num_rows($run1)>0){
			    $id=$_SESSION['tid'];
				$qry2="UPDATE `teacher_log` SET `t_pass`=$new WHERE `t_id`=$id";
				$run2=mysqli_query($con,$qry2);
				if($run2){
						?><script>alert("password changed .. ");</script><?php
					header("location:dashboard.php");
				}

			}
			
		}
   }
?>