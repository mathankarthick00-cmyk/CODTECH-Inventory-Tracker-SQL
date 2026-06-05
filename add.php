<?php
include 'db.php';

if(isset($_POST['submit'])){
    $name=$_POST['product_name'];
    $qty=$_POST['quantity'];
    $price=$_POST['price'];

    mysqli_query($conn,"INSERT INTO products(product_name,quantity,price)
    VALUES('$name','$qty','$price')");

    header("Location:index.php");
}
?>

<!DOCTYPE html>
<html>
<body>

<h2>Add Product</h2>

<form method="POST">
Product Name:
<input type="text" name="product_name"><br><br>

Quantity:
<input type="number" name="quantity"><br><br>

Price:
<input type="text" name="price"><br><br>

<input type="submit" name="submit" value="Add Product">
</form>

</body>
</html>
