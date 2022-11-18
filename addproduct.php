<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8"/>
    <title>Add Inputs</title>
    <link rel="stylesheet" href="account.css"/>
</head>
<body>
    <h1>Farmer Lending Plaform<br>Add product</h1>
<?php

    require('db2.php');

    // When form submitted, insert values into the database.
    if (isset($_REQUEST['name'])) {
        // removes backslashes
        $name = stripslashes($_REQUEST['name']);
        //escapes special characters in a string
        $name = mysqli_real_escape_string($con, $name);
        $code    = stripslashes($_REQUEST['code']);
        $code    = mysqli_real_escape_string($con, $code);
        $price = stripslashes($_REQUEST['price']);
        $price = mysqli_real_escape_string($con, $price);
        $image = stripslashes($_REQUEST['image']);
        $image = mysqli_real_escape_string($con, $image);
         
        $query    = "INSERT into `product` (name, code, price, image) VALUES ('$name', 'code', '$price', '$image')";
        $result   = mysqli_query($con, $query);
        if ($result) {
            echo "<div class='form'>
                  <h3>product added successfully.</h3><br/>
                  <p class='link'>Click here to <a href='addproduct.php'>add again</a> again.</p></div>
                  ";
        } else {
            echo "<div class='form'>
                  <h3>Insert Correct Details.</h3><br/>
                  <p class='link'>Click here to <a href='addproduct.php'>Add Inputs</a> again.</p>
                  </div>";
        }
        } else {
?>
    <form class="form" action="" method="post">
        <h1 class="login-title">Add Products</h1>
        <input type="text" class="login-input" name="name" placeholder="name" required />
        <br>
        <input type="text" class="login-input" name="code" placeholder="code">
        <br>
        <input type="text" class="login-input" name="price" placeholder="price">
        <br>
        <label for="myfile">Select a image:</label>
<input type="file"class="login-input" name="image">
<br>
        <input type="submit" name="submit" value="Add " class="login-button">
      <p class="link">  <p>Do you want to go back</p><a href="admin.php">Click Here  To Return </a></p>
        
    </form>
<?php
    }
?>
<footer>
    &copy;<em id="date"></em>Paul Owuor De Developer
</footer>
</body>
</html>