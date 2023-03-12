<?php

	include 'database_connection.php';

	if($_POST['uname'] && $_POST['pass'])
	{
		session_start();
		
		$uname=$_POST['uname'];
		$password=$_POST['pass'];
		parents($uname,$password,$con);
		
	}
	
	
	function parents($uname,$password,$con)
	{
		$query="SELECT p_username,p_pass FROM parent WHERE p_username='$uname'";
		
		$result=mysqli_query($con,$query);
		
		if(!$result)
		{	
			die("Can't Found : ".mysqli_error());
		}
		else
		{
			$row=mysqli_fetch_row($result);
			list($aname,$apass)=$row;

			if($uname==$aname && $password==$apass)
			{
				$_SESSION['username']=$uname;
				$_SESSION['type']='parent';
				header("location:parentindex.php");
			}
			else
			{
				$_SESSION['msg']="INVALID USER";
				header("location:index.php");
			}
		}
	}	
?>
