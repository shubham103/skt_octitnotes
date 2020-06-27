<?php

     include('../conn.php');
     if(isset($_POST['submit']))
	 {
         $r= bin2hex(random_bytes(3));
		  $name=mysqli_real_escape_string($con,$_POST['name']);
		 $email=mysqli_real_escape_string($con,$_POST['email']);
		 $password=mysqli_real_escape_string($con,$_POST['password']);
		 $qry="SELECT * FROM `teacher_log` WHERE `t_email`='$email' ";
		 $run=mysqli_query($con,$qry);
		 if(mysqli_num_rows($run)==1)
		 { 
			 ?><script> alert('email address already exist .. try forget password ! ');window.open("signupportal.php","_self");</script><?php
		 }
		 else{
			  $qry="INSERT INTO `teacher_log`(`t_email`, `t_pass`, `name`, `t_authen`, `random`) VALUES ('$email','$password','$name',0, '$r' )";
			  $fire= mysqli_query($con,$qry);
			  if ($fire){
			      include('mail.php');
				 ?><script> alert('Account created successfully.. please verify your email :)');window.open("emailverify.php","_self");</script><?php
			 }
		 }
	 }
     ?>