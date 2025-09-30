<?php
// ===== Kết nối CSDL =====
$servername = "localhost";
$username = "root";
$password = "NgOc.1607"; 
$dbname = "LaptopShop";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// ===== Xử lý thêm laptop =====
if (isset($_POST['add'])) {
    $brand = $_POST['brand'];
    $model = $_POST['model'];
    $price = $_POST['price'];
    $stock = $_POST['stock'];
    $desc = $_POST['description'];

    $sql = "INSERT INTO Laptops (brand, model, price, stock, description)
            VALUES ('$brand', '$model', '$price', '$stock', '$desc')";
    $conn->query($sql);
}

// ===== Xử lý xóa laptop =====
if (isset($_GET['delete'])) {
    $id = $_GET['delete'];
    $conn->query("DELETE FROM Laptops WHERE id=$id");
}

// ===== Lấy dữ liệu =====
$result = $conn->query("SELECT * FROM Laptops");
?>
<!DOCTYPE html>
<html>
<head>
    <title>Laptop Shop</title>
</head>
<body>
    <h1>Laptop Shop</h1>

    <!-- Form thêm laptop -->
    <form method="POST">
        <input type="text" name="brand" placeholder="Brand" required>
        <input type="text" name="model" placeholder="Model" required>
        <input type="number" step="0.01" name="price" placeholder="Price" required>
        <input type="number" name="stock" placeholder="Stock" required>
        <input type="text" name="description" placeholder="Description">
        <button type="submit" name="add">Add Laptop</button>
    </form>

    <br>

    <!-- Bảng hiển thị -->
    <table border="1" cellpadding="10">
        <tr>
            <th>ID</th><th>Brand</th><th>Model</th>
            <th>Price</th><th>Stock</th><th>Description</th><th>Action</th>
        </tr>
        <?php while($row = $result->fetch_assoc()): ?>
        <tr>
            <td><?= $row['id'] ?></td>
            <td><?= $row['brand'] ?></td>
            <td><?= $row['model'] ?></td>
            <td><?= $row['price'] ?></td>
            <td><?= $row['stock'] ?></td>
            <td><?= $row['description'] ?></td>
            <td>
                <a href="?delete=<?= $row['id'] ?>" onclick="return confirm('Delete this laptop?')">Delete</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </table>
</body>
</html>
<?php $conn->close(); ?>
