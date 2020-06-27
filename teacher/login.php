<?php
     
     include('../conn.php');
     if(isset($_POST['submit']))
	 {
         
		 $email=mysqli_real_escape_string($con,$_POST['email']);
		 $password=mysqli_real_escape_string($con,$_POST['password']);
		 $qry="SELECT * FROM `teacher_log` WHERE `t_email`='$email' and `t_pass`='$password'";
		 $run=mysqli_query($con,$qry);
		 if(mysqli_num_rows($run)==1)
		 { 
			 $dat=mysqli_fetch_assoc($run);
			 
			   session_start();
               $_SESSION['tid']=$dat['t_id'];
			 if($dat['t_authen']==1)
			 { 
			   ?><script>window.open('dashboard.php','_self');</script><?php
			 }
			 else{
				 
				 ?><script>window.open('emailverify.php?id=<?php echo($dat["t_id"]); ?>','_self');</script><?php
			 }
		}
		else
        { 
            ?> <script>alert(" please enter correct id or password");
                    window.open('loginportal.php','_self');
               </script>
            <?php
             
         }
	   }
     ?>