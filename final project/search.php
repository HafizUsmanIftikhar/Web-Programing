<?php

session_start();
echo'ok';
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'travel');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$location= $_POST['location'];
$date=$_POST['date'];

$s = "select * from tourlist where  tourplace = '$location' && startdate='$date' ";

$result =mysqli_query($con , $s);
$num = mysqli_num_rows($result);

if($num >= 1){

    
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('tour found Successfully you can book the tour');
    window.location.href='booking.html';
    </script>");
}
else{   
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('no tour is in this date on this place');
    window.location.href='tourlist.php';
    </script>");
}

?>