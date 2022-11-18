<?php
include("auth_session.php");
?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="style.css" />
    <style type="text/css">
body {
    background: #fff;
}
.form{
	background: #3e4144;
}
.container{
	 background-image: url(image.jpeg);
     background-repeat: no-repeat;
     background-size: cover;
     background-attachment: fixed;
	}
	
    </style>
    <title>Dashboard - Client area</title>
    <link rel="stylesheet" href="style.cs" />


</head>
<body>
<div class="form">
      
        </div>

 
<!DOCTYPE html>
<html>
<head>

    </style>
    <meta charset="utf-8">
    <title>Dashboard - Client area</title>

<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
</head>
<body>
   
    <div class="form2">
        
        </div>
        <div class="side-menu">
          <div class="brand-name">
             <h2 style="display: contents;color: black;"> <img src="logo.png" width="120px" style="width: 60px; height: 60px;">Farmer Lending platform</h2>
          </div>
          <ul>
             <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/icons8-dashboard-80.png" style="width: 30px; height: 30px; margin: 2px;"><span>Admin Dashboard</a></span></li>
            <li><a href="manager.php" style="text-decoration: none;"><img src="icon/buid.png" style="width: 30px; height: 30px; margin: 2px"><span>Manager</a></span></li>
            <li><a href="officer.php" style="text-decoration: none;"><img src="icon/living-room.png" style="width: 30px; height: 30px; margin: 2px;"><span>Register Field Officer</span></li>
             <li><a href="Farmer.php" style="text-decoration: none;"><img src="icon/to-do.png" style="width: 30px; height: 30px; margin: 2px;"><span>Register Farmer</a></span></li>
             <li><a href="Add_Student.php" style="text-decoration: none;"><img src="icon/student.png" style="width: 30px; height: 30px; margin: 2px"><span>Student</a></span>
             </li>
            <li><a href="dashboard2.php" style="text-decoration: none;"><img src="icon/help.png" style="width: 30px; height: 30px; margin: 2px"><span>Help</a></span></li>
          </ul>
        </div>
<div class="container">
    
<header>Farmer Tech lending platform</header>
  <div class="header">
    <div class="nav">
    <div class="search">
<input type="text" placehold="search">
<button type="submit"> <img src="icon/search-512 (1) (1).webp" style="width: 30px; height: 30px;"></button>
    </div>
    <div class="user">
      <a href="Generate_Report.php" class="btn">generat Report</a>
       <img src="avatar.PNG" style="display: flex; width: 30px; height: 30px;">
      <div class="img-case">
        <p style="margin-left:45px;0px;"><strong style="margin-top: 100px;"><p>Hey, <?php echo $_SESSION['username']; ?>!</p>
        <p><a href="logout.php">Logout</a></p>
      </div>
    </div>

  </div>
</div>

<center><p style="margin-top:10px">welcome home</p><center>
</body>
</html>
</body>
</html>