<?php
include("connection.php");
error_reporting(0);




if($_GET['submit'])
{
    $fullname = $_POST['fullname'];
	$studentphone = $_POST['studentphone'];
	$studentemail = $_POST['studentemail'];
    $studentregno = $_POST['studentregno'];
    $course =  $_POST['course'];
    $parentname =$_POST['parentname'];
    $parentphone = $_POST['parentphone'];
    $query ="UPDATE students SET name=' $name',phone='$phone' WHERE students='$id'";
    $data=mysqli_query($conn,$query);
    if($data)
    {
      echo "record updated .<a href='display.php'>Check here updated list here</a>";

    }
    else{
      echo "record not updated";
    }
}
    

else{
  echo "<font color='grey'>Click on the Update button to save the changes  ";
}
?>