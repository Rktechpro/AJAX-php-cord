<?php
//connection
$con=mysqli_connect('localhost','root');
//database
mysqli_select_db($con,'ajaxphp');

//  extract($_POST);
$username=$_POST['username'];
$password=$_POST['password'];
$email=$_POST['email'];
 if (!isset($_POST['submit'])){
     //Query 
     $q="insert into phpcurd  (username,password,email) values('$username','$password','$email')";
     $query=mysqli_query($con, $q);
    //  echo"$query";
    Header("location: insert.php");
     
 }
?>