<!DOCTYPE html>
<html>
<head>
	<title>Edit Child Details</title>
</head>
<style>
	body{
		background-repeat:no-repeat;
		background: url('childback.jpg');
	}
	div{
		padding:20;
		font-size:20;
	}
	.text{
		background-color:#c2d6d6;
		border:none;
		padding:9px 10px;
	}	
	.container {
	    position:absolute;
	    margin: 22px 50px 50px 40px;
	    padding: 25px;
	    background-color: white;
	    font-family:Century Gothic;	
	}
	select{
		width: 200px; 
		height: 30px;
	}
	input[type='submit']{
		width:130px;
		height:35px;
		border-radius:50px 50px 50px 50px;
	}
</style>

<body>
<form method="POST" class="container" action="<?php $_SERVER['PHP_SELF'] ?>">

<div>
<a href="viewparentchild.php"><img src="img/backarrow.png" width="30" height="30"></a>
<center><h1>Update Child Details</h1></center>

<?php
	include 'database_connection.php';

	$c_name = $_REQUEST['c_name'];
	$query = "SELECT * FROM child where c_name='$c_name'";

	$result = mysqli_query($con,$query);

	while ($row = mysqli_fetch_array($result)) 
	{
		
?>
<label><b>Child Full Name</b></label></br>
<input type="text" name="cname" class="text" placeholder="Enter First Name" size="70" value="<?php echo $row['c_name']; ?>"  disabled/></br></br>

<label><b>Child Gender</b></label></br>
<input type="radio" name="cgender" value="Male"  <?php echo $row['c_gender'] == "Male" ? 'checked': '' ?>/>Male
<input type="radio" name="cgender" value="Female" <?php echo $row['c_gender'] == "Female" ? 'checked': '' ?>/>Female

</br></br>
<label ><b>Child City</b></label></br>
<select name="ccity">
	<option value="<?php echo $row['c_city']; ?>"> <?php echo $row['c_city']; ?></option>
	                                <option value="Andhra Pradesh">Andhra Pradesh</option>
									<option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
									<option value="Arunachal Pradesh">Arunachal Pradesh</option>
									<option value="Assam">Assam</option>
									<option value="Bihar">Bihar</option>
									<option value="Chandigarh">Chandigarh</option>
									<option value="Chhattisgarh">Chhattisgarh</option>
									<option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
									<option value="Daman and Diu">Daman and Diu</option>
									<option value="Delhi">Delhi</option>
									<option value="Lakshadweep">Lakshadweep</option>
									<option value="Puducherry">Puducherry</option>
									<option value="Goa">Goa</option>
									<option value="Gujarat">Gujarat</option>
									<option value="Haryana">Haryana</option>
									<option value="Himachal Pradesh">Himachal Pradesh</option>
									<option value="Jammu and Kashmir">Jammu and Kashmir</option>
									<option value="Jharkhand">Jharkhand</option>
									<option value="Karnataka">Karnataka</option>
									<option value="Kerala">Kerala</option>
									<option value="Madhya Pradesh">Madhya Pradesh</option>
									<option value="Maharashtra">Maharashtra</option>
									<option value="Manipur">Manipur</option>
									<option value="Meghalaya">Meghalaya</option>
									<option value="Mizoram">Mizoram</option>
									<option value="Nagaland">Nagaland</option>
									<option value="Odisha">Odisha</option>
									<option value="Punjab">Punjab</option>
									<option value="Rajasthan">Rajasthan</option>
									<option value="Sikkim">Sikkim</option>
									<option value="Tamil Nadu">Tamil Nadu</option>
									<option value="Telangana">Telangana</option>
									<option value="Tripura">Tripura</option>
									<option value="Uttar Pradesh">Uttar Pradesh</option>
									<option value="Uttarakhand">Uttarakhand</option>
									<option value="West Bengal">West Bengal</option>
</select> 

</br></br>
<label ><b>Child Birth Date </b></label></br>
	<input type="date" name="cbirth" value="<?php echo $row['c_birth']; ?>" />
</br></br>

<label><b>Child Age </b></label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<label><b>Child Weight </b></label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<label><b>Child Height </b></label><br>

<input type="number" name="cage" class="text" placeholder="Age" value="<?php echo $row['c_age']; ?>" />
<input type="number" name="cweight" class="text" placeholder="Weight" value="<?php echo $row['c_weight']; ?>" />
<input type="number" name="cheight" class="text" placeholder ="Height" value="<?php echo $row['c_height']; ?>" />

</br></br>

<center><input type="submit" name="editchild" value="Edit Child Details"/></center>

</div>

</body>
</html>

<?php
	}
	if(isset($_POST['editchild']))
	{
		$gen = $_POST['cgender'];
		$city = $_POST['ccity'];
		$birth = $_POST['cbirth'];
		$age = $_POST['cage'];
		$weight = $_POST['cweight'];
		$height = $_POST['cheight'];

		$query="UPDATE child SET c_gender='$gen', c_city='$city', c_birth='$birth', c_age=$age, c_weight=$weight, c_height=$height WHERE c_name='$c_name'";

		$result=mysqli_query($con,$query);

		if(!$result)
		{
			die("<br>Can't Insert Data : " .mysqli_error());
		}

		echo "<script>alert('Edit Child Details..!!');window.location='viewparentchild.php'</script>";	
	}
	

?>
