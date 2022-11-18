




<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Login</title>
    <link rel="stylesheet" type="text/css" href="account.css">
    <link rel="stylesheet" type="text/css" href="company.css">
</head>
<body>
    <?php
session_start();
    include 'database.php';
    if (isset($_POST['email'])) {
         $email = stripslashes($_REQUEST['email']);
         $email = mysqli_real_escape_string($conn, $email);
        $farmerID = stripslashes($_REQUEST['farmerID']);
        $farmerID = mysqli_real_escape_string($conn, $farmerID);
    $sql="SELECT * FROM 'farmer' WHERE email='$email' AND farmerID='".md5($farmerID)."'";
   $result = mysqli_query($conn,$sql) or die(mysql_error());
        $rows = mysqli_num_rows($result); 
      if ($rows == 1) {
            $_SESSION['email'] = $email;
            // Redirect to user dashboard page
            header("Location: admin.php");
        } else {
            echo "<div class='form'>
                  <h3>Incorrect email/id.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    }else {
?>

    <form class="form" method="post" name="login">
        <h1 class="login-title">Admin Log In</h1>
        <input type="email" class="login-input" name="email" placeholder="email" autofocus="true"/>
        <input type="text" class="login-input" name="farmerID" placeholder="farmerID"/>
        <input type="submit" value="Login" name="submit" class="login-button"/>
        <p>Don't have an account </p>
        <p class="link"><a href="registration.php">Register Here</a></p>
    </form>
   <?php
    }
?>
<footer>
    &copy;<em id="date"></em>Mumias Alright preserved
</footer>
</body>
</html>