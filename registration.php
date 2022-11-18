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
    width: 100%;
    height: 50px;
    font-size: 16px;
    text-align: center;
    cursor: pointer;
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

    require('db.php');

    // When form submitted, insert values into the database.
    if (isset($_REQUEST['username'])) {
        // removes backslashes
        $username = stripslashes($_REQUEST['username']);
        //escapes special characters in a string
        $username = mysqli_real_escape_string($con, $username);
        $email    = stripslashes($_REQUEST['email']);
        $email    = mysqli_real_escape_string($con, $email);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
         $create_datetime = date("Y-m-d H:i:s");
        $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
        } else {
            echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
        }
        } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Registration</h1>
        <input type="text" class="login-input" name="username" placeholder="Username" required />
        <br>
        <input type="text" class="login-input" name="email" placeholder="Email Adress">
        <br>
        <input type="password" class="login-input" name="password" placeholder="Password">
        <br>
        <input type="submit" name="submit" value="Register" class="login-button">
      <p class="link">  <p>Do you have an account</p><a href="login.php">Click Here  To Login</a></p>
        
    </form>
<?php
    }
?>
<footer>
    &copy;<em id="date"></em>Paul Owuor De Developer
</footer>
</body>
</html>