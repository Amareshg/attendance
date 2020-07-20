<?php
	include "dbconn.php";
	if ($_FILES["file"]["error"] > 0)
	{
		echo "Error: " . $_FILES["file"]["error"] . "<br>";
		echo "<script>
				alert ('Please choose a file to upload')
				</script>";	
		header('Refresh: 0; URL =  index.php');
	}
	else
	{
				echo "Upload: " . $_FILES["file"]["name"] . "<br>";
		echo "Type: " . $_FILES["file"]["type"] . "<br>";
		echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br>";
		$a=$_FILES["file"]["tmp_name"];
		$a=$_FILES["file"]["tmp_name"];
		$csv_file = $a;
		//if (($getfile = 
		if (($getfile = fopen($csv_file, "r")) !== FALSE) 
		{
				 $data = fgetcsv($getfile, 1000, ",");
				 echo 44;
		   while (($data = fgetcsv($getfile, 1000, ",")) !== FALSE)
		   {
				$result = $data;
				$str = implode(",", $result);
				$slice = explode(",", $str);
				$col1 = $slice[0];
				$col2 = $slice[1];
				$col3 = $slice[2];				
				$col4 = $slice[3];				
				$query1 = "insert into student_data(Name,Roll_no,Phone_no) values('$col1','$col2','$col3','$col4')";
				$s1=mysql_query($query1, $connect );
				header('Refresh: 0; URL = index.php');
			}
		}
	}
?>