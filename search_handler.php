<?php
$conn = mysqli_connect('localhost', 'root', '', 'product_db');
$name = $_GET['name'];
$result = mysqli_query($conn, "SELECT * FROM products WHERE name LIKE '%$name%'");

echo "<table border='1' width='100%'>
    <tr><th>NAME</th><th>PROFIT</th><th></th></tr>";

while($row = mysqli_fetch_assoc($result)){
    $profit = $row['selling_price'] - $row['buying_price'];
    echo "<tr>
        <td>{$row['name']}</td>
        <td>$profit</td>
        <td><a href='edit.php?id={$row['id']}'>edit</a> <a href='delete.php?id={$row['id']}'>delete</a></td>
    </tr>";
}
echo "</table>";
?>