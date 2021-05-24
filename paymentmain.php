<?php
include("Database_connection.php");
?>

<html>
    <head>
    <title>Login And Registration Form for payment</title>
       <link rel="stylesheet" href="style.css">
    
    </head>
    <body>
      <div class="hero">
         <div class="form-box">
		 <h1>Payment for appointment</h1>


         </div>
		 <form id="Register" class="input-group">
			<input type="text" class="input-field" placeholder="Patient_id" name="ptid" required>
		  <input type="date" class="input-field" placeholder="Date" name="date" required>
		  
		   <input type="digit" class="input-field" placeholder="Amount" name="amnt" required>
		   <span>Prescription</span>
		  <form action="upload.php" method="POST" enctype="multipart/form-data">
		   <input type="file" name="file">
		   <button type="submit" class="submit-btn">pay</button>
		  </form>
		 

		 </form>
         </div>
      </div>
	  <script>
	  var y =document.getElementById("Register");
	  var z =document.getElementById("btn");
	  function Register(){
		 y.style.left = "70px";
		 z.style.left = "150px";
	  }
	  </script>
    </body>
</html>
<?php
$pi =$_GET['ptid'];
$dt =$_GET['date'];
$amt =$_GET['amnt'];
$fl =$_GET['file'];

$query="insert into payment values('$pi','$dt','$amt','$fl')";
$data= mysqli_query($con,$query);
if($data){
	echo "Data inserted into database";
}else{
	echo "Failed to insert Data";
}
?>