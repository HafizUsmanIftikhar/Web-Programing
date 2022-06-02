<?php

session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'travel');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$s="select * from tourlist";
$result=mysqli_query($con,$s);

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tour with us</title>
    <link rel="icon" href="icons8airplane.png">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body class="main_bg2">
     <header>

        <a href="#" class="logo">travel <span>.</span></a>

        <nav class="navbar">
            <ul>
                <li><a data-scroll="home" href="index.html" class="active">home</a></li>
                <li><a data-scroll="feature" href="index.html">feature</a></li>
                <li><a data-scroll="about" href="index.html">about</a></li>
                <li><a data-scroll="gallery" href="index.html">gallery</a></li>
                <li><a href="tourlist.html">Tour List</a></li>
                <li><a data-scroll="review" href="index.html">review</a></li>
                <li><a data-scroll="contact" href="index.html">contact</a></li>
                <li><a data-scroll="" href="login.html">Admin</a></li>
                <li><a data-scroll="" href="booking.html">Booking</a></li>
            </ul>
        </nav>

        <div class="fas fa-bars"></div>
    </header> 

    <div class="title-text">
        <h3>Upcomming</h3>
        <h1>TOUR SCHEDULE</h1>

    </div>
    
<table class="content-table">
  <thead>
    <tr>
        <th> place</th>
        <th> Days</th>
        <th> Start Date</th>
        <th> End Date</th>
        <th> Cost_$</th>
        <th>Booking Last Date</th>
        <th> Transport</th>
    </tr>
  </thead>
  


  <?php
   while($rows=mysqli_fetch_assoc($result))
   {
	?>
  <tr>
	  <td><?php echo $rows['tourplace']; ?></td>
	  <td><?php echo $rows['duration']; ?></td>
	  <td><?php echo $rows['startdate']; ?></td>
      <td><?php echo $rows['enddate']; ?></td>
      <td><?php echo $rows['cost']; ?></td>
      <td><?php echo $rows['booklastdate']; ?></td>
      <td><?php echo $rows['transport']; ?></td>
  </tr>


<?php
   }

   ?>
  
</table> 


</body>
</html>