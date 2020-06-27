<?php session_start();
     include('../conn.php');
     if(isset($_POST['submit']))
	 {
         
		 $id=mysqli_real_escape_string($con,$_POST['id']);
		 $code=mysqli_real_escape_string($con,$_POST['authen']);
		 $qry="SELECT `random` FROM `teacher_log` WHERE `t_id`='$id'";
		 $run=mysqli_query($con,$qry);
		 if(mysqli_num_rows($run)==1)
		 { 
			 $dat=mysqli_fetch_assoc($run);
			 if($dat['random']==$code)
			 { 
			  	 $qry="UPDATE `teacher_log` SET `t_authen`=1 WHERE `t_id`=$id";
				 $fire=mysqli_query($con,$qry);
				 if($fire){
			header('location:dashboard.php');
			 }
			 else{
				 ?><script> alert(" wrong code .. ::) ");window.open('emailverify.php?id=<?php echo($_POST['id']);?>','_self');</script><?php
			 
			     
			     
			 }} 
			 else{
				 ?><script> alert(" wrong code .. ::) ");window.open('emailverify.php?id=<?php echo($_POST['id']);?>','_self');</script><?php
			 }
		
	 
		     
		 }} 
     ?>