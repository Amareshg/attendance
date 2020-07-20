<?php include "dbconn.php"; 
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
				$sql4 = "select * from student_data where Roll_no='$col2'";
					$Rec4=mysql_query($sql4);
					$count4=mysql_num_rows($Rec4);
			
				
				if($count4 == 0)
				{
					echo "<script>
						alert ('Student is not registered')
						</script>";	
					header('Refresh: 0; URL =  index.php');
				}
				else
				{
				$sql1 = "select * from stu_attendance where Roll_no='$col2'";
					$Rec2=mysql_query($sql1);
					$count1=mysql_num_rows($Rec2);
			
				
				if($count1 >= 1)
				{
				
				$query = "update stu_attendance set Total_classes='$col3' where Roll_no='$col2'";
				$s=mysql_query($query, $connect );
				$query1 = "update stu_attendance set Classes_attend='$col4' where Roll_no='$col2'";
				$s1=mysql_query($query1, $connect );
				header('Refresh: 0; URL = index.php');
				}
				else
				{
						
					$query1 = "insert into stu_attendance(Name,Roll_no,Total_classes,Classes_attend) values('$col1','$col2','$col3','$col4')";
					$s1=mysql_query($query1, $connect );
					header('Refresh: 0; URL = index.php');
				
				}
				}
			}
		}
	}

?>