<?php

session_start();

$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'travel');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$location= $_POST['place'];
$date=$_POST['startdate'];
 
// $orgDate = "17-07-2012";  
$newdate = date("Y-m-d", strtotime($date));  
echo $newdate; 
echo gettype($newdate); 
echo $location;
$s = "Delete from tourlist where  tourplace = '$location' AND startdate= '$newdate' ";

$result =mysqli_query($con , $s);


if($result){
    
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('tour delete Successfully');
    window.location.href='deletetour.html';
    </script>");
}

else{   
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('no tour is in this date on this place');
    window.location.href='deletetour.html';
    </script>");
}

?>