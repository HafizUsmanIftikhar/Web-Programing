<?php

session_start();
$con =mysqli_connect('localhost','root','');
mysqli_select_db($con,'travel');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}

$s="select * from message";
$result=mysqli_query($con,$s);

?>


<!DOCTYPE html>
<html>
<head>
	<title>travel with us</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="css/style.css">

	<style>

.content-table {
	text-align: center;
	border-collapse: collapse;
	 margin: 25px 0; 
	font-size: 20px;
	min-width: 700px;
	border-radius: 5px 5px 0 0;
	overflow: hidden;
	box-shadow: 0 0 20px rgba(0, 0, 0, 0.15);
	position: relative;
	top: 0.5rem;
	/* right: 35px;
	width: 500px; */
  }
  
  .content-table thead tr {
	background-color: #009879;
	color: #ffffff;
	text-align: left;
	font-weight: bold;
	font-size: 23px;
  }
  
  .content-table th,
  .content-table td {
	padding: 14px 17px;
  }
  
  .content-table tbody tr {
	border-bottom: 1px solid #dddddd;
  }
  
  .content-table tbody tr:nth-of-type(even) {
	background-color: #f3f3f3;
  }
  
  .content-table tbody tr:nth-of-type(odd) {
	background-color: #faf2f270;
  }
  
  .content-table tbody tr:last-of-type {
	border-bottom: 2px solid #009879;
  }
  
	</style>


</head>
<body>
	<input type="checkbox" id="checkbox">
	<header class="header">
		<h2 class="u-name"><b><h3>Admin</h3></b>
			<label for="checkbox">
				<i id="navbtn" class="fa fa-bars" aria-hidden="true"></i>
			</label>
		</h2>
		<i class="fa fa-user" aria-hidden="true"></i>
	</header>
	<div class="body">
		<nav class="side-bar">
			<div class="user-p">
				<img src="img/user.jpg">
				<h4>usman</h4>
			</div>
			<ul>
				<li>
					<a href="dashboard.html">
						<i class="fa fa-desktop" aria-hidden="true"></i>
						<span>Dashboard</span>
					</a>
				</li>
				<li>
					<a href="message.php">
						<i class="fa fa-envelope-o" aria-hidden="true"></i>
						<span>Messages</span>
					</a>
				</li>
				<li>
					<a href="tour.html">
						<i class="fa fa-table " aria-hidden="true"></i>
						<span>tourlist</span>
					</a>
				</li>
				<li>
					<a href="deletetour.html">
						<i class="fa fa-table" aria-hidden="true"></i>
						<span>delete tour</span>
					</a>
				</li>
				<li>
					<a href="book1.html">
						<i class="fa fa-book" aria-hidden="true"></i>
						<span>book tour </span>
					</a>
				</li>

				<li>
					<a href="bookedtour.php">
						<i class="fa fa-book" aria-hidden="true"></i>
						<span>bookings </span>
					</a>
				</li>

				<li>
					<a href="../login.html">
						<i class="fa fa-power-off" aria-hidden="true"></i>
						<span>Logout</span>
					</a>
				</li>
			</ul>
		</nav>
		<section class="section-1">
            
            
<table class="content-table">
	<thead >
	  <tr>
		  <th> Name</th>
		  <th> Email</th>
		  <th> Message</th>
	  </tr>
	</thead>
	<?php
   while($rows=mysqli_fetch_assoc($result))
   {
	?>
  <tr>
	  <td><?php echo $rows['name']; ?></td>
	  <td><?php echo $rows['email']; ?></td>
	  <td><?php echo $rows['message']; ?></td>
  </tr>
  

<?php
   }

   ?>
		</section>
	</div>

</body>
</html>
