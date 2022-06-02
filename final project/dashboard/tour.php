<?php

session_start();

$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'travel');
//echo "h";
if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
  }
$place= $_POST['place'];
$duration=$_POST['duration'];
$startdate =$_POST['startdate'];
$enddate = $_POST['enddate'];
$cost = $_POST['cost'];
$booklastdate = $_POST['booklastdate'];
$transport = $_POST['transport'];

$reg = "insert into tourlist(tourplace,duration,startdate,enddate,cost,booklastdate,transport) values ('$place','$duration','$startdate','$enddate','$cost','$booklastdate','$transport')";
 $result =mysqli_query($con , $reg);



// if (mysqli_query($con, $req)) {
//     echo "New record created successfully";
//   } else {
//     echo "Error: " . $sql . "<br>" . mysqli_error($conn);
//   }



  

if($result){
    
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('Register successfully');
    window.location.href='tour.html';
    </script>");
}
else{   
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('there is some problem in booking please try again');
    window.location.href='tour.html';
    </script>");
}

 


?>