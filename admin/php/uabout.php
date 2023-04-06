<?php
session_start();
include('../../include/db.php');
$query1="SELECT * FROM aboutus_setup WHERE faculty_id='$_SESSION[id]'";
$queryrun1=mysqli_query($db,$query1);
$data=mysqli_fetch_array($queryrun1);

if(isset($_POST['save'])){        
$heading=mysqli_real_escape_string($db,$_POST['ptitle']);
$subheading=mysqli_real_escape_string($db,$_POST['psubtitle']);
$shortdesc=mysqli_real_escape_string($db,$_POST['shortdesc']);
$longdesc=mysqli_real_escape_string($db,$_POST['longdesc']);  
$dob=mysqli_real_escape_string($db,$_POST['dob']);  
$website=mysqli_real_escape_string($db,$_POST['website']);  


if($data==0)
{
$q1="INSERT INTO `aboutus_setup`(`shortdesc`, `heading`, `subheading`, `longdesc`, `website`, `dob`, `faculty_id`) VALUES ('$shortdesc','$heading','$subheading','$longdesc','$website','$dob','$_SESSION[id]')";
     echo $q1;    
$queryrun=mysqli_query($db,$q1);
if($queryrun){
    header("location:../?editabout=true&msg=Inserted");
} 
}
else
{
$query="UPDATE aboutus_setup SET ";
$query.="shortdesc='$shortdesc',";
$query.="heading='$heading',";
$query.="subheading='$subheading',";
$query.="dob='$dob',";
$query.="website='$website',";
$query.="longdesc='$longdesc' WHERE id='$data[id]'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editabout=true&msg=updated");
}    
}
}    
    

