<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Data</title>
    <link rel="stylesheet" href="./css/data-style.css" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"
    />
  </head>
  <body>
    <h4>SAUDI ELECTRONIC UNIVERSITY</h4>
    <?php
include("config.php");
error_reporting(0);
$query="SELECT *FROM student_details";
$data=mysqli_query($mysqli,$query);
$total=mysqli_num_rows($data);

	?>

    <div class="cont1">
      <table id="programmes">
        <tr>
          <th>S/N</th>
          <th>Full Name</th>
          <th>Student's Phone</th>
          <th>Student's Email</th>
          <th>Reg No</th>
          <th>Course Admitted</th>
          <th>Parent Name</th>
          <th>Parent Phone</th>
          <th>Delete</th>
          
          
        </tr>
        <?php

        while($result=mysqli_fetch_assoc($data))
        {	
      
          echo "<tr>
          <td>". $result['id']."</td>
            <td>". $result['studentname']."</td>
            <td>".$result['phone']."</td>
            <td>".$result['email']."</td>
            <td>".$result['regno']."</td>
            <td>".$result['course']."</td>
            <td>".$result['parentname']."</td>
            <td>".$result['parentphone']."</td>
            <td><a href='update.php?$result[student]'>UPDATE</a></td>
			
            
          </tr>";
        }
      
    
  
      
      ?>
      </table>
    </div>

    <div class="floatbot">
      <a href="#cont1">
        <i
          class="fa fa-arrow-circle-up"
          id="go-top"
          style="font-size: 36px"
        ></i>
      </a>
    </div>
  </body>
</html>
