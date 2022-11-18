
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
</head>
<body>
<?php
extract($_POST);
include("database.php");
$sql=mysqli_query($conn,"SELECT * FROM farmer where email='$email'");
if(mysqli_num_rows($sql)>0)
{
    echo "<div class='form'>
                  <h3> The email you've entered exist.</h3><br/>
                  <p class='link'>Click here to <a href='farmer.php'>Register</a> Register again</p>
                  </div>";
 
	exit;
}

 $query="INSERT INTO farmer(email,farmerID,companyID,fullname,phonenumber) VALUES ('$email','$farmerID)','$companyID','$fullname','$phonenumber')";
            $sql=mysqli_query($conn,$query)or die("Could Not Perform the Query");
            echo"Farmer registered succesfully";
        header ("Location: admin.php?status=success");
    
    

?>
</body>
</html>