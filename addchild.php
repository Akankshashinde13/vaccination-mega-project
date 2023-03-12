<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Baby Vaccination</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Jost:wght@500;600;700&family=Open+Sans:wght@400;600&display=swap" rel="stylesheet"> 

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="lib/twentytwenty/twentytwenty.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-dark m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
        <div class="spinner-grow text-secondary m-1" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light ps-5 pe-0 d-none d-lg-block">
        <div class="row gx-0">
            <div class="col-md-6 text-center text-lg-start mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center">
                    <small class="py-2"><i class="far fa-clock text-primary me-2"></i>Opening Hours: Mon - Saturday : 9 am - 6.00 pm, Sunday Closed </small>
                </div>
            </div>
            <div class="col-md-6 text-center text-lg-end">
                <div class="position-relative d-inline-flex align-items-center bg-primary text-white top-shape px-5">
                    <div class="me-3 pe-3 border-end py-2">
                        <p class="m-0"><i class="fa fa-envelope-open me-2"></i>babyvaccine@demo.com</p>
                    </div>
                    <div class="py-2">
                        <p class="m-0"><i class="fa fa-phone-alt me-2"></i>+123 879 9876</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <nav class="navbar navbar-expand-lg bg-white navbar-light shadow-sm px-5 py-3 py-lg-0">
        <a href="index.html" class="navbar-brand p-0">
            <h1 class="m-0 text-primary"><i class="fa fa-tooth me-2"></i>Baby Vaccine</h1>
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarCollapse">
            <div class="navbar-nav ms-auto py-0">
                <a href="Home.html" class="nav-item nav-link active">Home</a>
                <a href=" about.html" class="nav-item nav-link">About</a>
                <a href=" VaccinationCalender.html" class="nav-item nav-link">Vaccination Calender</a>
                <a href=" " class="nav-item nav-link">Vaccine Report</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Login</a>
                    <div class="dropdown-menu m-0">
                        <a href="index.php" class="dropdown-item">User Login</a>
                        <a href=" " class="dropdown-item">admin Login</a>
                        

                    </div>
                </div>
                <a href="" class="nav-item nav-link">Logout</a>
            </div>
                 
        </div>
    </nav>
    <!-- Navbar End -->

<!DOCTYPE html>
<html>
<head>
	<title>Add Child</title>
</head>
<style>
	body{
		background-repeat:no-repeat;
		background: url('childback.jpg');
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
		width:100px;
		height:35px;
		border-radius:50px 50px 50px 50px;
	}
</style>

<body>
	
<form method="POST" class="container" action="<?php $_SERVER['PHP_SELF'] ?>">
	<div style="padding:20;font-size:20">




<a href="parentindex.php"><img src="img/backarrow.png" width="30" height="30"></a>

<center><h1 >Add Child Details</h1></center>

<label><b>Child Full Name</b></label></br>
<input type="text" name="cname" class="text" placeholder="Enter First Name" size="70" /></br></br>

<label><b>Child Gender</b></label></br>
<input type="radio" name="cgender" value="Male" />Male
              	       <input type="radio" name="cgender" value="Female" />Female
</br></br>
<label ><b>Child City</b></label></br>
<select name="ccity">
	<option value="none" selected disabled hidden> Select an city</option>
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
	<input type="date" name="cbirth" />
</br></br>

<label><b>Child Age </b></label> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<label><b>Child Weight </b></label>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; 
<label><b>Child Height </b></label><br>
	
<input type="number" name="cage" class="text" placeholder="Age" />
<input type="number" name="cweight" class="text" placeholder="Weight" />
<input type="number" name="cheight" class="text" placeholder ="Height" />
</br></br>

<label ><b>Add Vaccine</b></label></br>
<br></form>

<?php
	include 'database_connection.php';

	$query="SELECT * FROM vaccine";

	$result=mysqli_query($con,$query);

	while ($row = mysqli_fetch_array($result))
	{
		echo "<table>
				<tr>
					<td><input type='checkbox' name='chk[]' value='".$row['name']."' />".$row['name']."</td>
				</tr>
			  </table>";
	}
?>
<br>
<center><input type="Submit" name="addchild" value="Add child"/></center>

</div>

<?php

	if(isset($_POST['addchild']))
	{
		$con=mysqli_connect("localhost","root","","e_vaccination");

		$name = $_POST['cname'];
		$gen = $_POST['cgender'];
		$city = $_POST['ccity'];
		$birth = $_POST['cbirth'];
		$age = $_POST['cage'];
		$weight = $_POST['cweight'];
		$height = $_POST['cheight'];
		$chkval = implode(',',$_POST['chk']);
		
		$p_username = $_SESSION['username'];

		$query="INSERT INTO child VALUES('$name','$gen','$city','$birth',$age,$weight,$height,'$chkval','$p_username')";
		
		$result=mysqli_query($con,$query);

		if(!$result)
		{
			die("<br>Can't Insert Data : " .mysqli_error());
		}

		$vaccineval = $_POST['chk'];
		$date = date('Y-m-d');
		for($i=0; $i<count($vaccineval); $i++)
		{
				$query_vaccine = "SELECT * FROM vaccine ";
				$result_vaccine = mysqli_query($con,$query_vaccine);

				while($row_vaccine = mysqli_fetch_array($result_vaccine))
				{
					if($vaccineval[$i] == $row_vaccine['name'])
					{
						$time = strtotime($date);
						$final = date("Y-m-d", strtotime($row_vaccine['timing'], $time));
						$query_date = "INSERT INTO vaccine_dates VALUES('$vaccineval[$i]','$date','$final','$name','$p_username','false')";

						$result = mysqli_query($con,$query_date);
						if(! $result)
						{
							die('Could not insert Records: ' . mysql_error());
						}
					}
				}
			
		}
				
		echo "<script>alert('Add Your Child Details..!!');window.location='parentindex.php'</script>";
	}
?>


</body>
</html>

 <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="lib/twentytwenty/jquery.event.move.js"></script>
    <script src="lib/twentytwenty/jquery.twentytwenty.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>