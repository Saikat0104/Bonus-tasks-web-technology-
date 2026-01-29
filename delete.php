<?php
$conn = mysqli_connect('localhost', 'root', '', 'product_db');
$id = $_GET['id'];
$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id=$id"));

if(isset($_POST['confirm_delete'])){
    mysqli_query($conn, "DELETE FROM products WHERE id=$id");
    header('location: display.php');
}
?>
<fieldset style="width: 300px;">
    <legend>DELETE PRODUCT</legend>
    Name: <?=$row['name']?><br>
    Buying Price: <?=$row['buying_price']?><br>
    Selling Price: <?=$row['selling_price']?><br>
    Displayable: <?=$row['display']?><br>
    <hr>
    <form method="POST"><input type="submit" name="confirm_delete" value="Delete"></form>
</fieldset>