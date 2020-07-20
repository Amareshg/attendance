<?php include "dbconn.php"; 
	$year=$_POST['year']; 
	$month=$_POST['month']; 
	
	if($year=="Select")
		{
			echo "<script>
				alert ('Please Select Required fields')
				</script>";
				header('Refresh: 0; URL = index.php');
				return;
		}
		elseif($month=="Select")
		{
			echo "<script>
				alert ('Please Select Required fields')
				</script>";
				header('Refresh: 0; URL = index.php');
				return;
		}
	elseif ($_FILES["file"]["error"] > 0)
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
		if (($getfile = fopen($csv_file, "r")) !== FALSE)
		{
			$data = fgetcsv($getfile, 1000, ",");
			//echo $data;
			while ($data !== 0) 
			{
				$result = $data;
				$str = implode(",", $result);
				$slice = explode(",", $str);
				$col1 = $slice[0];
				$col2 = $slice[1];
				$col3 = $slice[2];
				$col4 = $slice[3];
				$col5 = $slice[4];
				//$que1 = "INSERT INTO student_data VALUES('".$col1."','".$col2."','".$col3."','".$col4."','".$col5."')";
				$s=mysql_query($que1, $connect );
				header('Refresh: 0; URL = index.php');
				//echo "<script>alert('Record successfully uploaded.');</script>";
				
			}
			echo "<script>alert('Record not uploaded.');</script>";
			//header('Refresh: 0; URL = index.php');
		}
	}

?>