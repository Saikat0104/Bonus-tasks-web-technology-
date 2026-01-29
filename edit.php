<?php
$conn = mysqli_connect('localhost', 'root', '', 'product_db');
$id = $_GET['id'];
$row = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM products WHERE id=$id"));

if(isset($_POST['update'])){
    $display = isset($_POST['display']) ? 'Yes' : 'No';
    $sql = "UPDATE products SET name='{$_POST['name']}', buying_price='{$_POST['buying']}', 
            selling_price='{$_POST['selling']}', display='$display' WHERE id=$id";
    mysqli_query($conn, $sql);
    header('location: display.php');
}
?>
<form method="POST">
    <fieldset style="width: 300px;">
        <legend>EDIT PRODUCT</legend>
        Name<br><input type="text" name="name" value="<?=$row['name']?>"><br>
        Buying Price<br><input type="number" name="buying" value="<?=$row['buying_price']?>"><br>
        Selling Price<br><input type="number" name="selling" value="<?=$row['selling_price']?>"><br>
        <hr>
        <input type="checkbox" name="display" value="Yes" <?=($row['display']=='Yes')?'checked':''?>> Display
        <hr>
        <input type="submit" name="update" value="SAVE">
    </fieldset>
</form>