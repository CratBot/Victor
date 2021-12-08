<?php
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'students';

$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
$sql = "SELECT username,pass FROM user";

    if(isset($_POST['submit']))
    {
         //Check Username
         if($username == $username)
         {
                   //Check Password
                   if($password == $password)
                   {
                    echo ("<SCRIPT LANGUAGE='JavaScript'>            

                    window.location.href='edit.php';
                           </SCRIPT>"); //If username & password are correct -> log in to front.php.
                   }
                   else //$pass != "password"
                   {
                       $pass_error = "Invalid Password.";
                   }
         }
         else //$uname != "username"
         {
              $uname_error = "Invalid Username.";
         }
    }
  ?>