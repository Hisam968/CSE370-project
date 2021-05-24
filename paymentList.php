<?php
include("Database_connection.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Patients List</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<body>

 <header>
 	<h1>Payment History</h1>
 </header>
 <?php
         $query= "SELECT * FROM payment order by Patient_id desc;";
         $output= mysqli_query($con, $query);
         if( mysqli_num_rows ($output) > 0){
             while($row=mysqli_fetch_array($output)){
     ?>
 <div class="row">


 	<div class="left-column">
 	  <div class="card">
 		<h2>Patient Id: <?php echo $row['Patient_Id'] ?> </h2>
 		<h5> <?php echo $row['Pay_date'] ?> </h5>
 		<img src=<?php echo 'images/pays/'.$row['Prescription'] ?> alt=""/>
         <span><?php echo $row['Payment_amount'] ?> tk</span>
 		
 	  </div>
 	</div>
 </div>
 <?php
             }
         }
     ?>
<footer>
	<h2>Footer</h2>
</footer>

</body>
</head>