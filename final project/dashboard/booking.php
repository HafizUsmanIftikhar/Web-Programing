<?php

session_start();
echo 'ok';
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'travel');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
$name= $_POST['name'];
$email=$_POST['email'];
$people =$_POST['people'];
$place = $_POST['place'];
$date = $_POST['date'];
$time = $_POST['time'];
$Idcardnumber = $_POST['Idcardnumber'];
$number = $_POST['number'];

// echo("'$name','$email','$people','$place','$date','$time','$Idcardnumber','$number'");

$reg = "INSERT INTO `booking` (`name`, `email`, `people`, `place`, `date`, `time`, `idcardnumber`, `number`) VALUES ('$name','$email','$people','$place','$date','$time','$Idcardnumber','$number');";

$result =mysqli_query($con , $reg);


if($result){
    
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Register successfully');
    window.location.href='book1.html';
    </script>");
}
else{   
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('there is some problem in booking please try again');
    window.location.href='book1.html';
    </script>");
}

?>