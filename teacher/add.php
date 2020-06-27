
<?php 
session_start(); 
if(!isset($_SESSION['tid']))
{
    header("location:../index.php");
}
include("../conn.php");
if(isset($_POST['submit']))
{
    
    $subname=$_POST['subject'];
    
    $qr="SELECT * FROM `subject` WHERE `s_name`='$subname'";
    $r=mysqli_query($con,$qr);
    if(mysqli_num_rows($r)==0){
        
    $qry="INSERT INTO `subject` (`s_name`) VALUES ('$subname')";
    $run=mysqli_query($con,$qry);
    if($run){
        ?>
        <script> alert("subject added..");
        window.open('dashboard.php','_self');</script>
        <?php
    }
    else{
         ?>
        <script> alert("subject cannot be added try again later..");
        window.open('dashboard.php','_self');</script>
        <?php

    }
    
   }
   else {
 ?>
        <script> alert("subject already exist..");
        window.open('dashboard.php','_self');</script>
        <?php
       
   }
    
}


?>