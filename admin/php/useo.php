<?php
session_start();
include('../../include/db.php');
include('checkupload.php');
$query="SELECT * FROM basic_setup WHERE faculty_id='$_SESSION[id]'";


$queryrun=mysqli_query($db,$query);
$data=mysqli_fetch_array($queryrun);

$target_dir = "../../assets/img/";

if(isset($_POST['seo'])){    
$siteicon=$_FILES['siteicon']['name'];        
if($siteicon==""){
    $siteicon=$data['icon'];
}else{
    $pdone = Upload('siteicon',$target_dir);
}
    
    
$title=mysqli_real_escape_string($db,$_POST['title']);
$keyword=mysqli_real_escape_string($db,$_POST['keywords']);
$desc=mysqli_real_escape_string($db,$_POST['description']);
  
 
if($pdone=="error"){
    header("location:../?editseo=true&msg=error");
}else{

	if($data==0)
	{
		$q="INSERT INTO `basic_setup`(`title`, `description`, `keyword`, `icon`, `faculty_id`)";
		$q.="VALUES ('$title','$desc','$keyword','$siteicon','$_SESSION[id]')";
		echo $q;    
        $queryrun=mysqli_query($db,$q);
         if($queryrun){
            header("location:../?editseo=true&msg=INSERTED");
                } 
	}
	else
	{
$query="UPDATE basic_setup SET ";
$query.="icon='$siteicon',";
$query.="title='$title',";
$query.="keyword='$keyword',";
$query.="description='$desc' WHERE id='$data[id]'";
echo $query;    
$queryrun=mysqli_query($db,$query);
if($queryrun){
    header("location:../?editseo=true&msg=updated");
}  
}  

}    
    
}

