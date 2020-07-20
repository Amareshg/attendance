<?php include "dbconn.php";
	
	 $Sql4 = "SELECT max(Sno) FROM `student_data`";  
		$Rec4 = mysql_query($Sql4);
	$data4 = mysql_fetch_row($Rec4);
	$max1=$data4[0];
	for($i=1;$i<=$max1+1;$i++)		

	{
	$Sql3 = "SELECT Name,Roll_no,Phone_no FROM `student_data` WHERE Sno='$i'";  
	$Rec3 = mysql_query($Sql3);
	$data3 = mysql_fetch_row($Rec3);
	//$count1=mysql_num_rows($Rec3);


	/* $roll_no = $_GET['val'];
	$Sql1 = "SELECT Name,Phone_no FROM `student_data` WHERE Roll_no='$roll_no'";  
	$Rec1 = mysql_query($Sql1);
	 $data = mysql_fetch_row($Rec1);*/
	$name = $data3[0];
	$rno = $data3[1];
	$numbers = $data3[2];	
	$a ="0";
	
	$Sql2 = "SELECT Total_classes,Classes_attend FROM `stu_attendance` WHERE Roll_no='$rno'";  
	$Rec2 = mysql_query($Sql2);
	$data2 = mysql_fetch_row($Rec2);
	$totclass = $data2[0];	
	$classattend = $data2[1];	
	
	$percent = ($classattend / $totclass)* 100;
	
	
	$username = "amaresh143406@gmail.com";
	$hash = "90cf8a5a577ecde81de5605f0682812c9e733b7ffe9e8733b40742407e485f6e";

	// Config variables. Consult http://api.textlocal.in/docs for more info.
	$test = "0";

	// Data for text message. This is the text message data.
	$sender = "TXTLCL"; // This is who the message appears to be from.
	//$numbers = "919032143068"; // A single number or a comma-seperated list of numbers
	$message = "Hello ".$name.".\n Total classes commenced ".$totclass.".\n Classes attended ".$classattend."\n Attendance Percentage is  ".$percent."  \n\nFrom: \nHead CSE  \nJntuhces \nSangareddy";
	// 612 chars or less
	// A single number or a comma-seperated list of numbers
	$message = urlencode($message);
	$data = "username=".$username."&hash=".$hash."&message=".$message."&sender=".$sender."&numbers=".$numbers."&test=".$test;
	$ch = curl_init('http://api.textlocal.in/send/?');
	curl_setopt($ch, CURLOPT_POST, true);
	curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
	curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($ch); // This is the result from the API
	curl_close($ch);
	//$count1 = $count1-1;
	}
?>
