<!DOCTYPE html>
<?php include "pagelinks.php"; ?>
<head>
  <title>Welcome</title>
	<style>
	input{
	font-family:Candara;
	font-size:14px;
	}
	 .container {
        height: 100%;
        background: #f0e68c;
    }
	
	</style>
	<style>
    .display_none {
        display: none;
    }
</style>
<style>
	ul.tab {
    list-style-type: none;
    margin: 2;
    padding: 0;
    overflow: hidden;
     background-color: white;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: navy;
    text-align: center;
    padding: 4px 8px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 14px;
}

/* Change background color of links on hover */
ul.tab li a:hover {background-color: #ddd;color: #1f4061;}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {background-color: #ddd;}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border-top: none;
}
table, th, td {
    border: 1px solid black;
    border-collapse: collapse;
}
th, td {
    color: navy;
    text-align: center;
    padding: 4px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 14px;
}
.borderless table{
	border-top-style: none;
    border-left-style: none;
    border-right-style: none;
    border-bottom-style: none;
}
</style>
<script>
function opentab(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;
		//document.getElementById('ajaxDiv1').style.display="none";
		document.getElementById('temp').style.display="block";
		document.getElementById('pd').innerHTML=" ";
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tabcontent.length; i++) {
        tablinks[i].classList.remove("active");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.classList.add("active");
}

</script>
	<script>
	function opentab1(evt, cityName) {
		
	
	//	alert(cityName);
    // Declare all variables
    var i, tabcontent, tablinks;
		//document.getElementById('ajaxDiv1').style.display="none";
		document.getElementById('temp').style.display="block";
		document.getElementById('pd').innerHTML=" ";
    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tabcontent.length; i++) {
        tablinks[i].classList.remove("active");
    }
//alert(cityName);
    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    document.getElementById(cityName).style.display = "block";
	 evt.currentTarget.classList.add("active");
//alert(cityName);
   
	 }

</script>
<script>
	function sendsms()
		{	
			//alert(123);
			//var val = document.getElementById('input_value').value;
		//	alert(789);
			var ajaxRequest; // The variable that makes Ajax possible!
			try
			{
			// Opera 8.0+, Firefox, Safari
				ajaxRequest = new XMLHttpRequest();
			}catch (e)
			{
			// Internet Explorer Browsers
				try
				{
					ajaxRequest = new ActiveXObject("Msxml2.XMLHTTP");
				}
				catch (e)
				{
					try
					{
						ajaxRequest = new ActiveXObject("Microsoft.XMLHTTP");
					}
					catch (e)
					{
						// Something went wrong
						alert("Your browser broke!");
						return false;
					}
				}
			}
				ajaxRequest.onreadystatechange = function()
			{
				if(ajaxRequest.readyState == 4 )
				{
					var ajaxDisplay = document.getElementById('ajaxDiv1');
					ajaxDisplay.innerHTML = ajaxRequest.responseText;
				}
			}
			//var trn = document.getElementById(trncode1).value;
			//alert(val);
			//var queryString = '?val=' + val ;
			//alert(queryString);
			ajaxRequest.open("GET", "sms.php", true);
			//alert(1);
			//ajaxRequest.open("GET", "userdb.php" , true);
			ajaxRequest.send(null);
		}
</script>
</head>
<body style="background-color:white;font-family:fontawesome;font-size:20px;">
				
	<div class="panel panel-default">
			<div class="panel-body" style="background-color:white">
				<div class="row" align="center">
				<div class="col-md-2">
				<img src="logo.png" alt="no image"  width="90" height="50">
				</div>
				<div class="col-md-8">
						<h1 style="color:Navy;font-family:Times New Roman;font-size:24pt;font-weight:bold;">JNTUH COLLEGE OF ENGINEERING SULTHANPUR</h1>
				</div>
				<div class="col-md-2">
				<img src="Emblem.png" alt="no image"  width="50" height="50">
				</div>
				</div>
			
		<ul class="tab" style="border: 2px solid red">
			<li><a href="#" class="tablinks" onclick="opentab(event,12)" autofocus >Home</a></li>
			<li><a href="#" class="tablinks" value="ch" onclick="opentab(event,2)" >About CES</a></li>
			<li><a href="#" class="tablinks" onclick="opentab(event,3)">Adminisration</a></li>
			<li><a href="#" class="tablinks" onclick="opentab(event,5)">Contact Us</a></li>
			<li style="float:right"><a href="#" class="tablinks" onclick="opentab(event,6)">Admin Login</a></li>
			<li style="float:right"><a href="Admin_logout.php" class="tablinks">Admin Logout</a></li>
	</ul>
	
	<div class="row" width="100%">
		<div id="div2" class="col-md-2">
			<table class="ctl00_Menu1_4" style="width:100%;">
			<tr><td><a href="#" class="tablinks" onclick="opentab1(event,7)">Student Registration</a></td></tr>
			<tr><td><a href="#" class="tablinks" onclick="opentab1(event,8)">Attendance Upload</a></td></tr>
			<tr><td><a href="#" class="tablinks" onclick="opentab1(event,9)">Send SMS</a></td></tr>
			</table>
		</div>
		<div id="middiv" class="col-md-8">
		<div id="temp">
		<table style="border:3px solid silver"><tr><td>
		<div id="ab" style="height:300px">
		<div id="pd">
			<h1 style="color: rgb(204, 0, 51)"><u>Welcome to the Mess Fees Project</u></h1><br>
			<p>Project is developed by Goshika Amaresh</p>
			<p>Under the guidance of Mr.Joshi Sripad (CSE HOD)</p>
		</div>
		<div id="12" class="tabcontent">
		
			<img src="college_building.png" alt="no image" autofocus>
		</div>
		<div id="2" class="tabcontent">
				<h1 align="left" style="color: rgb(204, 0, 51)"><u>JNTUH College of Engineering Sultanpur</u></h1>
				<p align="left">A new milestone in the history of Jawaharlal Nehru Technological University Hyderabad is the beginning 
				of another Constituent Engineering College situated at Sulthanpur in Medak District from the Academic Year 2012-13. 
				JNTUH College of Engineering Sulthanpur is just 20 Km away from Sangareddy on the way to Jogipet and well connected 
				by road from Hyderabad as well as Sangareddy, located in the lap of natural green sylvan under Singoor Dam and surrounded 
				by fields producing sugarcane, paddy and cotton Realising the requirement of high quality technical education in the rural
				areas of AP, where talent as well as potential is available with dedicated and committed students, JNTUH College of Engineering 
				Sulthanpur has taken up an initiative to start new Branches at B.Tech level in Mechanical Engineering with specialization in 
				Material Science and Nano technology, in Civil Engineering with specialization in Environmental Engineering, apart from regular 
				B.Tech Courses in ECE and CSE</p>
		</div>
		<div id="3" class="tabcontent">
				<h1 align="left" style="color: rgb(204, 0, 51)"><u>JNTUHCES Adminisration</u></h1>
				
		</div>
		<div id="5" class="tabcontent" align="left">
				<h1 style="color: rgb(204, 0, 51)"><u>Contact Us</u></h1>
				<p>JNTUH College of Engineering Sultanpur</p>
				<p>Sultanpur(Vill), Pulkal(Mdl),<br>
					Sangareddy(Dist),<br>
					Telangana-502273<br>
					Ph:- 040-32410622.<br>
					Email:- principaljntuhces@gmail.com</p>
		</div>
		<div id="7" class="tabcontent">
				<form action="stud_reg_excel.php" method="POST" enctype="multipart/form-data" style="overflow:auto"name="myform2">
					<center>
					<h3><ins>Upload Student Data</ins></h3><br>
					<h4>Deploy-Excell-File</h4><br>
					<input type="file" id="file" align="center" name="file" multiple="multiple" accept="All files/*" /autofocus><br><br>
					<p>Note! Please Choose a .CSV extension to upload.</p>
					<input type="submit" title="Click to Submit" class="btn btn-primary" value="Submit" style="font-size:15px;">&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="Reset" class="btn btn-primary" value="Reset" style="font-size:15px;"><br><br>
					<br>
					</center>
				</form>
		</div>
		<div id="8" class="tabcontent">
				<form action="atten_upload.php" method="POST" enctype="multipart/form-data" style="overflow:auto"name="myform2">
					<center>
					<h3><ins>Upload Student Data</ins></h3><br>
					<h4>Deploy-Excell-File</h4><br>
					<input type="file" id="file" align="center" name="file" multiple="multiple" accept="All files/*" /autofocus><br><br>
					<p>Note! Please Choose a .CSV extension to upload.</p>
					<input type="submit" title="Click to Submit" class="btn btn-primary" value="Submit" style="font-size:15px;">&nbsp;&nbsp;&nbsp;&nbsp;
					<input type="Reset" class="btn btn-primary" value="Reset" style="font-size:15px;"><br><br>
					<br>
					</center>
				</form>
		</div>
		<div id="9" class="tabcontent">
		<form action="#" name="myform" method="POST" >
					<h1>Sending SMS to a Student</h1>
					Click on send to send SMS<br><br>
					<input type="submit" value="Send" onclick="sendsms()">
				</form>
		</div>

		<div id="6" class="tabcontent" align="center" >
				<form action="admin_query.php" method="post" name="ad login" enctype="multipart/form-data" style="overflow:auto" name="admin login">
				<h1>Admin Login</h1><br>
				Username :   &nbsp;<input type="textbox" name="username" placeholder="Enter username" autofocus><br><br>
				Password :   &nbsp;<input type="password" name="password" placeholder="Enter password"><br><br>
				<input type="Submit" class="btn btn-info" Name="Submit" value="Submit">&nbsp;&nbsp;&nbsp;
				<input type="reset" class="btn btn-info" Name="Reset" value="Reset">&nbsp;&nbsp;&nbsp;
				</form>
		</div>
	
			
		</div>
		
		
		<div class="table">
		<table align="down">
		<tr><td><br>
		
		 <span style="font-family: Arial; color: rgb(204, 0, 51);"><span style="font-weight: bold;">
		 <font style="font-family: Arial; text-decoration: underline;" size="4">MISSION</font></span>
		 </span><br><span style="font-family: Arial;"><span style="font-weight: bold;"></span></span>
		<font class="Apple-style-span" face="Verdana" size="2"><span style="color: rgb(51, 0, 153); ">
		 <span style="font-weight: bold;"></span></span><font style="color: rgb(51, 0, 153); ">"
		JNTUHCES strives to provide Engineering Educational opportunities to all aspiring rural youth to excel in life by nurturing academic excellence,
		 fostering values, creating civic responsibility and building global competencies in a dynamic environment.'
		"<br></font>
		</font><br style="font-weight: bold;">
		</td><td>
		
		 <span style="font-family: Arial; color: rgb(204, 0, 51);"><span style="font-weight: bold;">
		 <font style="font-family: Arial; text-decoration: underline;" size="4">VISION</font></span>
		 </span><br><span style="font-family: Arial;"><span style="font-weight: bold;"></span></span>
		 <font class="Apple-style-span" face="Verdana" size="2"><span style="color: rgb(51, 0, 153); ">
		 <span style="font-weight: bold;"></span></span><font style="color: rgb(51, 0, 153); ">"
		JNTUHCES strives to provide Engineering Educational opportunities to all aspiring rural youth to excel in life by nurturing academic excellence,
		 fostering values, creating civic responsibility and building global competencies in a dynamic environment.'
		"</font>
		</font><br style="font-weight: bold;">
		</td></tr></table>
		</div>
		
		</td></tr></table>
		</div>
		
		</div>
		
		<div id="div3" class="col-md-2" style="border:1px solid silver">
		<center>
				<img src="balunaik.png" alt="no image"  width="90" height="90">
				<p style="color:#000099;font-family:Arial;font-size:8pt;font-weight:normal;">Dr. B Balu Naik<br>Principal</p>                    
			</center>
		</div>
	</div>
	</div>
</body>
</html>