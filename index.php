<?php
include 'config.php';
$result = $conn->query("SELECT * FROM users");
?>
<!DOCTYPE html>
<html>
<head><title>CRUD Azure</title></head>
<body>
<h2>Data Users</h2>
<a href='add.php'>Tambah Data</a><br><br>
<table border='1' cellpadding='8'>
<tr><th>ID</th><th>Nama</th><th>Email</th><th>Aksi</th></tr>
<?php while($row = $result->fetch_assoc()): ?>
<tr>
<td><?= $row['id'] ?></td>
<td><?= $row['name'] ?></td>
<td><?= $row['email'] ?></td>
<td>
<a href='edit.php?id=<?= $row['id'] ?>'>Edit</a> |
<a href='delete.php?id=<?= $row['id'] ?>'>Delete</a>
</td>
</tr>
<?php endwhile; ?>
</table>
</body>
</html>
