<?php

 session_start();
 
 $con =mysqli_connect('localhost','root','');
 mysqli_select_db($con,'travel');
 
 $name = $_POST['username'];
 $pass = $_POST['password'];
 
 $s = "select * from login where username = '$name' and  password = '$pass' ";
 $result =mysqli_query($con , $s);
 $num = mysqli_num_rows($result);
 
 if($num >0){
     $_SESSION['username'] = $name;
     header('Location: ./dashboard/dashboard.html');
 }
 
 else{
     echo 'incorrect user name';
     echo ("<script LANGUAGE='JavaScript'>
     window.alert('incorrect user name');
      window.location.href='login.html';
     </script>");
 }

?>

