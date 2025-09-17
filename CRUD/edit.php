<?php include 'db.php'; 
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();
?>
<!DOCTYPE html>
<html>
<head><title>Edit Data</title></head>
<body>
    <h2>Edit User</h2>
    <form method="post">
        Nama: <input type="text" name="name" value="<?= $data['name'] ?>"><br>
        Email: <input type="text" name="email" value="<?= $data['email'] ?>"><br>
        <button type="submit" name="update">Update</button>
    </form>
    <a href="index.php">Kembali</a>
</body>
</html>

<?php
if (isset($_POST['update'])) {
    $name  = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>
