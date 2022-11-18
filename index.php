<?php
session_start();
include('db2.php');
$status="";
if (isset($_POST['code']) && $_POST['code']!=""){
$code = $_POST['code'];
$result = mysqli_query(
$con,
"SELECT * FROM `product` WHERE `code`='$code'"
);
$row = mysqli_fetch_assoc($result);
$name = $row['name'];
$code = $row['code'];
$price = $row['price'];
$image = $row['image'];

$cartArray = array(
	$code=>array(
	'name'=>$name,
	'code'=>$code,
	'price'=>$price,
	'quantity'=>1,
	'image'=>$image)
);

if(empty($_SESSION["cart"])) {
    $_SESSION["cart"] = $cartArray;
    $status = "<div class='box'>Product is added to your cart!</div>";
}else{
    $array_keys = array_keys($_SESSION["cart"]);
    if(in_array($code,$array_keys)) {
	$status = "<div class='box' style='color:red;'>
	Product is already added to your cart!</div>";	
    } else {
    	 $_SESSION["cart"] = array_merge(
    $_SESSION["cart"],
    $cartArray
    );
    $status = "<div class='box'>Product is added to your cart!</div>";
	}

	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<link rel="stylesheet" type="text/css" href="product.css">
</head>
<style type="text/css">
    body{
        background: teal;
    }
    h1{
        text-align: center;
    }
    h2{
text-align: center;
    }
    .cart_div{
        margin-left: 80%;
    }
    footer{
    text-align: center;
    background: gold;
    margin-top: 30%;
}

</style>
<body>
    <h1>Farmer Lending Platform</h1>
    <h2>Order For The Inputs</h2>
<?php
if(!empty($_SESSION["cart"])) {
$cart_count = count(array_keys($_SESSION["cart"]));
?>
<div class="cart_div">

<a href="cart.php"><img src="image/logo.JPG" width="3%" height="3%"  /> Cart<span>
<?php echo $cart_count; ?></span></a>
</div>
<?php
}
?>
<?php
$result = mysqli_query($con,"SELECT * FROM `product`");
while($row = mysqli_fetch_assoc($result)){
    echo "<div class='product_wrapper'>
    <form method='post' action=''>
    <input type='hidden' name='code' value=".$row['code']." />
    <div class='image'><img src='".$row['image']."' /></div>
    <div class='name'>".$row['name']."</div>
    <div class='price'>$".$row['price']."</div>
    <button type='submit' class='buy'>Order Now</button>
    </form>
    </div>";
        }
mysqli_close($con);
?>

<div style="clear:both;"></div>
<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
 <footer>
    &copy;<em id="date"></em>Paul Owuor De Developer
</footer>
</body>
</html>