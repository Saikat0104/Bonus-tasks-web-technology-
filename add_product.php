<form method="POST">
    <fieldset style="width: 300px;">
        <legend>ADD PRODUCT</legend>
        Name<br><input type="text" name="name"><br>
        Buying Price<br><input type="number" name="buying"><br>
        Selling Price<br><input type="number" name="selling"><br>
        <hr>
        <input type="checkbox" name="display" value="Yes"> Display
        <hr>
        <input type="submit" name="save" value="SAVE">
    </fieldset>
</form>

<?php
if(isset($_POST['save'])){
    $conn = mysqli_connect('localhost', 'root', '', 'product_db');
    $name = $_POST['name'];
    $buying = $_POST['buying'];
    $selling = $_POST['selling'];
    $display = isset($_POST['display']) ? 'Yes' : 'No';

    $sql = "INSERT INTO products (name, buying_price, selling_price, display) 
            VALUES ('$name', '$buying', '$selling', '$display')";
    mysqli_query($conn, $sql);
    echo "Product saved successfully!";
}
?>