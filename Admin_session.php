<?php
	//echo 123;
		echo "<script>
		alert('Please login to Continue');
		</script>";
	session_start();
	$ses = $_SESSION["pwd"];
	if($ses == null)
	{
		echo "<script>
		alert('Please login to Continue');
		</script>";
		header('Refresh: 0; URL = index.php');
	}
	$_SESSION['start']=time();
	if(!isset($_SESSION['expire']))
	{
		$_SESSION['expire']= $_SESSION['start'] + (10*60);
	}
	$now =time();
	if($now > $_SESSION['expire'])
	{
		session_destroy();
		echo "<script>
		alert('Session has Expired Please login to continue');
		</script>";
		header('Refresh: 0; URL = index.php');
	}
	else
	{
		echo "<script>
		alert('Session has Expired Please login to continue');
		</script>";
		header('Refresh: 0; URL = index.php');
	}
?>