<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Registration</title>
    <link rel="stylesheet" href="account.css"/>
</head>
<style >
    body {
    background: #3e4144;
    background-image: url(image/admin.JPG);
    background-repeat: no-repeat;
    background-size: cover;

}
.form {
    margin: 50px auto;
    width: 300px;
    padding: 30px 25px;
    background:powderblue;
}
h1.login-title {
    color: blue;
    margin: 0px auto 25px;
    font-size: 25px;
    font-weight: 300;
    text-align: center;
}
.login-input {
    font-size: 15px;
    border: 1px solid #ccc;
    padding: 10px;
    margin-bottom: 25px;
    height: 25px;
    width: calc(100% - 23px);
}
.login-input:focus {
    border-color:#6e8095;
    outline: none;
}
.login-button {
    color: #fff;
    background: #55a1ff;
    border: 0;
    outline: 0;
    width: 50%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
margin-left: 20%;

}
.resetbutton{
    color: #fff;
    background: black;
    border: 0;
    outline: 0;
    width: 50%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
    margin: 2%;
    padding: 5%;
    margin-left: 20%;
}
.link {
    color: blue;
    font-size: 15px;
    text-align: center;
    margin-bottom: 0px;
}
.link a {
    color: #666;
}
h3 {
    font-weight: normal;
    text-align: center;
}
.logout{
    color: white;
    background: green;
}
footer{
    text-align: center;
    background: gold;
    margin-top: 30%;
}
h1{
    text-align: center;
}
</style>
<body>
    <h1>Farmer Lending Plaform<br>Welcome To Registration Page</h1>
<?php

    require('db1.php');

    // When form submitted, insert values into the database.
    if (isset($_POST['username'])) {
        

        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $phonenumber   = stripslashes($_REQUEST['phonenumber']);
        $phonenumber    = mysqli_real_escape_string($con, $phonenumber);
         $nationalID   = stripslashes($_REQUEST['nationalID']);
        $nationalID    = mysqli_real_escape_string($con, $nationalID);
        $companyID  = stripslashes($_REQUEST['companyID']);
        $companyID   = mysqli_real_escape_string($con, $companyID);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
         
        $query= "INSERT into `farmers` (username, password, email,phonenumber,nationalID,companyID)
                     VALUES ('$username', '" . md5($password) . "', '$email','$phonenumber','$nationalID','$companyID')";
        $result = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>Farmer registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='farmerreport.php'>generate report</a></p>
                  <br>
                  <p class='link'>Click here to <a href='registration1.php'>again</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration1.php'>registration</a> again.</p>
                  </div>";
        }
        } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Register Farmer Here</h1>
        <input type="text" class="login-input" name="username" placeholder="Enter Username" required />
        <br>
        <input type="text" class="login-input" name="email" placeholder="Enter Email Adress">
        
        <br>
        <input type="text" class="login-input" name="phonenumber" placeholder="Enter Phonenumber">
        <br>
        <input type="text" class="login-input" name="nationalID" placeholder="Enter National ID">
        <br>
          <input type="text" class="login-input" name="companyID" placeholder="Enter Company ID">
        <br>
        <input type="password" class="login-input" name="password" placeholder="Create Password">
        <br>
        <input type="submit" name="submit" value="Register" class="login-button">
        <br>
     <input type="reset" name="reset" value="reset" class="resetbutton">
        
    </form>
<?php
    }
?>
<footer>
    &copy;<em id="date"></em>Paul Owuor De Developer
</footer>
</body>
</html>