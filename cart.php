<?php
session_start();
$status="";
if (isset($_POST['action']) && $_POST['action']=="remove"){
if(!empty($_SESSION["cart"])) {
    foreach($_SESSION["cart"] as $key => $value) {
      if($_POST["code"] == $key){
      unset($_SESSION["cart"][$key]);
      $status = "<div class='box' style='color:red;'>
      Product is removed from your cart!</div>";
      }
      if(empty($_SESSION["cart"]))
      unset($_SESSION["cart"]);
      }		
}
}

if (isset($_POST['action']) && $_POST['action']=="change"){
  foreach($_SESSION["user'"] as &$value){
    if($value['code'] === $_POST["code"]){
        $value['quantity'] = $_POST["quantity"];
        break; // Stop the loop after we've found the product
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
        background: teal;;
  }
  h1{
        text-align: center;
    }
    h2{
text-align: center;
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
<div class="cart">
<?php
if(isset($_SESSION["cart"])){
    $total_price = 0;
?>  
<table class="table">
<tbody>
<tr>
<td></td>
<td>ITEM NAME</td>
<td>QUANTITY</td>
<td>UNIT PRICE</td>
<td>GROSS TOTAL</td>
<td>INTEREST</td>
</tr> 
<?php   
foreach ($_SESSION["cart"] as $product){
  ?>
<tr>
<td>
<img src='<?php echo $product["image"]; ?>' width="50" height="40" />
</td>
<td><?php echo $product["name"]; ?><br />
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="remove" />
<button type='submit' class='remove'>Remove Item</button>
</form>
</td>
<td>
<form method='post' action=''>
<input type='hidden' name='code' value="<?php echo $product["code"]; ?>" />
<input type='hidden' name='action' value="change" />
<select name='quantity' class='quantity' onChange="this.form.submit()">
<option <?php if($product["quantity"]==1) echo "selected";?>
value="1">1</option>
<option <?php if($product["quantity"]==2) echo "selected";?>
value="2">2</option>
<option <?php if($product["quantity"]==3) echo "selected";?>
value="3">3</option>
<option <?php if($product["quantity"]==4) echo "selected";?>
value="4">4</option>
<option <?php if($product["quantity"]==5) echo "selected";?>
value="5">5</option>
<option <?php if($product["quantity"]==6) echo "selected";?>
value="6">6</option>
<option <?php if($product["quantity"]==7) echo "selected";?>
value="7">7</option>
<option <?php if($product["quantity"]==8) echo "selected";?>
value="8">8</option>
<option <?php if($product["quantity"]==9) echo "selected";?>
value="9">9</option>
<option <?php if($product["quantity"]==10) echo "selected";?>
value="10">10</option>
</select>
</form>
</td>
<td><?php echo "$".$product["price"]; ?></td>
<td><?php echo "$".$product["price"]*$product["quantity"]; ?></td></tr>
<?php

$total_price += ($product["price"]*$product["quantity"]);
$interest =($total_price);

}
?>
<tr>
<td colspan="5" align="right">
<strong>TOTAL: <?php echo "$".$total_price; ?></strong>
</td>
</tr>

</tbody>

</table>  
<button type='submit' class='buy'>Submit Your Order</button>  
  <?php
}else{
  echo "<div><h3>Your cart is empty!</h3>
   <p class='link'>Click here to <a href='index.php'>place order</a></p>
   </div>";
  }
?>
</div>
<div style="clear:both;"></div>

<div class="message_box" style="margin:10px 0px;">
<?php echo $status; ?>
</div>
 <footer>
    &copy;<em id="date"></em>Paul Owuor De Developer
</footer>
</body>
</html>