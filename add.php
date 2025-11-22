<?php
include 'config.php';
if($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $conn->query("INSERT INTO users(name,email) VALUES('$name','$email')");
    header("Location: index.php");
}
?>
<form method='POST'>
Nama: <input name='name'><br>
Email: <input name='email'><br>
<button>Simpan</button>
</form>
