<?php

session_start();

$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'travel');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$name= $_POST['name'];
$email=$_POST['email'];
$message =$_POST['message'];

$reg = "insert into message (name,email,message) values ('$name','$email','$message')";

$result =mysqli_query($con , $reg);


if($result){
    
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('message send successfully');
    window.location.href='index.html';
    </script>");
}
else{   
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('there is some problem in sending message please try again');
    window.location.href='index.html';
    </script>");
}

 


?>