<?php
include "dbconn.php";
	$Password1=$_POST['password'];
	$Username=$_POST['username'];
	$que1=mysql_query("select * from admin_password") or die(mysql_error());
		if(empty($Username) )
		{
		      if(empty($Password1))
				{
					echo "<script>
					alert ('Please Enter Username & Password')
					</script>";
		
				}
				else
				{
					echo "<script>
					alert ('Please Enter Username')
					</script>";
				}			
				header('Refresh: 0; URL = index.php');
				return;
		}		
		elseif(empty($Password1))
			{
				echo "<script>
				alert ('Please Enter Password')
				</script>";	
				header('Refresh: 0; URL =  index.php');
				return;
			}
		else
		{
					$que1=mysql_query("select * from admin_password where ID='$Username'") or die(mysql_error());
					$rec=mysql_fetch_array($que1);
					$count1=mysql_num_rows($que1);
					$ID=$rec[1];
					$Password=$rec[0];
					date_default_timezone_set("Asia/Kolkata");
					$t= date("h:i:sa");
					$date=date("y-m-d");
						if($count1==0)
							{
								if($Password!=$Password1)
								{
							
									echo "<script>
									alert ('Invalid User name & Password')
									</script>";
									header('Refresh: 0; URL = index.php');
								}
									else
										{
											echo"<script>
											alert('invalid Username')
											</script>";
											header('Refresh:0;URL=index.php');
										}
							}
							
							elseif($Password!=$Password1)
							{
								echo "<script>
								alert ('Invalid Password')
								</script>";
								header('Refresh: 0; URL = index.php');
							}
							else
							{
								echo "<script>
								alert ('Logged in successfully')
								</script>";
								session_start();
								$_SESSION["pwd"] = "$Password";
								header('Refresh: 0; URL = index.php');		
							}	
		}
?>	