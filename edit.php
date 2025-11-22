<?php
include 'config.php';
$id = $_GET['id'];
$data = $conn->query("SELECT * FROM users WHERE id=$id")->fetch_assoc();

if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("UPDATE users SET name='$name', email='$email' WHERE id=$id");
    header("Location: index.php");
}
?>
<form method='POST'>
Nama: <input name='name' value='<?= $data['name'] ?>'><br>
Email: <input name='email' value='<?= $data['email'] ?>'><br>
<button>Update</button>
</form>
