<!DOCTYPE html>
<html>
<head>
<meta http-equiv="content-type" content="text/html; charset=utf-8" />
<title>AVG Limited</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="shortcut icon" href="icon_company_no-logo_200x200.jpg.png">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
 <meta name="viewport" content="width=device-width, initial-scale=1">
 
 <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
 
 
 <div id="wrapper">
	<div class="cont"> 
		<p><i class=" fa fa-phone-square" style="font-size:15px;color:green;"> </i> 01761775372 ; 01818724136<br> <i class="fa fa-envelope" style="font-size:15px"> nasrinkonok@gmail.com</i></p>
	</div>
     
	<div style="color:black;margin-left:170px;margin-top:2px">
       
     <h1><b><i>AVG Limited</i></b></h1><br>

            </div>
         <div style="width:150px;height:90px;float:left;margin-left:3px;margin-top:-90px;"> 
                <img src="Company-default.png" width=150 height=90>
            
              </div>
			   <div style="clear:both;" ></div>
	<div class="input">
	<form action="login.php" method="POST">
	 UserName: <input type="text" name="username"  placeholder="Username">
	 Password: <input type="password" name="password"  placeholder="Password">

	<input type="submit" name="submit" value="Login" >
	<input type="submit" name="signup" value="SignUp" >
	</form>
	
	</div>		   

   
	<div id="menu">
		<ul>
			<li><a href="home.html">Home</a></li>
			<li><a href="services.html">Services</a></li>
			<li><a href="contact.html">Contact Us</a></li>
	
		</ul>
	</div>
<div>
<center><h1>Admin</h1></center>
			
		
		 
		<form action="" method="post">
		<input style="float:right" type="button"  id="btnSearch" value="Search" onClick="searchbtn()">
		<input style="float:right" type="text" id="search_box" name="findName">
		<a href="EmployeeReg.php"><input type="button" value="Add New Employee"></a>
		<input type="button" id="showEL" value="Show Employee List" onClick="showELbtn()">
		<input type="button" id="showUL" value="Show User List" onClick="showULbtn()"><br>
		 </form>
		
		<div style="text-align:center " id="result"></div>
		
		<br><a href="logout.php"><input style="float:right" type="button" value="Logout"></a><br><br>
			
	</div>
	


<div id="footer">
<div style="float:left text-align:center;">
 <p>
                             <strong>AVG Limited</strong> <br>
                            <span class="glyphicon glyphicon-map-marker"></span> House 2A, Road 18, NIkunja-2 <br />Dhaka 1213, Bangladesh<br />
                            <span class="glyphicon glyphicon-phone-alt"></span> 01761775372 ; 01818724136
</div>

		<p style="color:#aa44ff;">(c) All Rights Reserve.Designed by <br><a style="color:red" href="https://www.facebook.com/nasrin.konok.9">Nasrin Akter Konok</a></p>
		  
	</div>
	</div>
</div>
<script type="text/JavaScript" src="main.js"></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
  <script type="text/javascript" src="js/bootstrap.js"></script>
</body>
</html>
