<?php
session_start();
include('../../include/db.php');


$id1=$_SESSION['id'];



$sql1 = "SELECT * FROM `even_sem`";
$res=mysqli_query($db, $sql1);

$data1=mysqli_fetch_array($res);
echo "<a href='<?php $data1[unit_ppt];?>' >click to download</a>";
print_r($data1);
if(isset($_POST['addpdf'])){ 
$course=$_POST['course'];
$sem=$_POST['sem'];
$subject=$_POST['sname'];  
$subjectcode=$_POST['scode']; 
$unit=$_POST['nunit'];  
$filename = $_FILES['pdffile']['name'];


    // destination of the file on the server
    $destination = __FILE__ . $filename;

    echo "$destination";
    // get the file extension
    $extension = pathinfo($filename, PATHINFO_EXTENSION);

    // the physical file on a temporary uploads directory on the server
    $file = $_FILES['pdffile']['tmp_name'];
    $size = $_FILES['pdffile']['size'];

    if (!in_array($extension, ['zip', 'pdf', 'docx'])) {
        echo "You file extension must be .zip, .pdf or .docx";
    } elseif ($_FILES['pdffile']['size'] > 1000000) { // file shouldn't be larger than 1Megabyte
        echo "File too large!";
    } else {
        // move the uploaded (temporary) file to the specified destination
        if (move_uploaded_file($file, $destination)) {
            $sql = "INSERT INTO `even_sem`(`id`,`course`, `semester`, `subject_name`, `sub_code`, `unit`, `unit_ppt`, `faculty_id`) VALUES ('','$course','$sem','$subject','$subjectcode','$unit','$destination','id1')";
            if (mysqli_query($db, $sql)) {
                echo "<a href='$destination' download>click to download</a>";
                echo "File uploaded successfully";

            }
            else
            {
                echo mysqli_error($db);
            }
        } else {
            echo "Failed to upload file.";
        }
    }
 }   
//$projectname=mysqli_real_escape_string($db,$_POST['projectname']);
//$projectlink=mysqli_real_escape_string($db,$_POST['projectlink']);
  
 

  
    
