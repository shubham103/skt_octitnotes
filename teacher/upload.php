<?php 
session_start();
   include("../conn.php");
   
  if(isset($_SESSION['tid']))
     {
	   
		if(isset($_POST['submit']))
               {
			
                   if(isset($_FILES['pdf']))
                   {
                       
                        $errors=array();
                        $maxsize=20480;
                        $acceptable=array('application/pdf');
                        $subject=(int)mysqli_real_escape_string($con,$_POST['subject']);
					    $unit=(int)mysqli_real_escape_string($con,$_POST['unit']);
                        $tid=$_SESSION['tid'];
					    $hashstr=$tid.$subject.$unit;
					    $fileoriginal=sha1($hashstr);
					    $fileoriginal=$fileoriginal.".pdf";
                        $filetemp=$_FILES['pdf']['tmp_name'];
                        $fileaddress="../data/$fileoriginal";
                        
                        if(($_FILES['pdf']['size'] <=$maxsize)|| ($_FILES['pdf']['size']==0)){
							
                            $errors[]='File must be less than 2 MB.';
                        }
                        if((!in_array($_FILES['pdf']['type'],$acceptable))&&(!empty($_FILES['pdf']['type']))){
							
                            $errors[]='Only .pdf files are accepted.';
                        }
                        if(count($errors)==0)
                        { 
							
								
                            	$qry1="SELECT `link` FROM `t_s` WHERE  `t_id`=$tid AND `s_id`=$subject AND `unit`=$unit";
							    $run1=mysqli_query($con,$qry1);
							    if($run1)
								{
									
									
									$dat=mysqli_fetch_assoc($run1);
									if($dat['link']==$fileoriginal)
									{
										
										
                                       ?><script>
											alert('you have already submitted notes for this unit.. delete it first :) ' );
										 	window.open("dashboard.php","_self");
										 </script>
										<?php
									     
                                    }
							     	else
								 	{
										
										
										$qry="INSERT INTO `t_s`(`t_id`, `s_id`, `unit`, `link`) VALUES ($tid,$subject,$unit,'$fileaddress')";
									 	$run=mysqli_query($con,$qry);
									 	if($run)
										{
											
											
											move_uploaded_file($filetemp,$fileaddress);
                                			?><script>alert('code is uploaded successfully...'); window.open("dashboard.php","_self");</script><?php
									 	}
							    	 	else
									 	{
											
											?><script>alert('something went ,inform to admin as soon as possible..........'); window.open("dashboard.php","_self");</script><?php
							         	}
							  		 }
								}
						}
					     else
						{
							
							 foreach($errors as $error)
							 {
								
								 ?><script>alert("<?php echo($error);?>"); </script><?php
							 }
							 ?><script>window.open("dashboard.php","_self");</script><?php
                          
                         }
				   }
                       
              }
						
   		}
     ?>
