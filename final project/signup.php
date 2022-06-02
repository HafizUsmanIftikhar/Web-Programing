<?php
 session_start();

 $con =mysqli_connect('localhost','root','');
 mysqli_select_db($con,'travel');

 $email = $_POST['email'];

 $s = "select * from signup where email = '$email' ";
 $result =mysqli_query($con , $s);
 $num = mysqli_num_rows($result);

 if($num == 1){
    echo ("<script LANGUAGE='JavaScript'>
    window.alert('All ready register');
     window.location.href='index.html';
    </script>");

 }
 else{
     $reg = "insert into signup(email) values ('$email')";
     mysqli_query($con,$reg);
     echo ("<script LANGUAGE='JavaScript'>
     window.alert('register successfully');
      window.location.href='index.html';
     </script>");

 }

?>