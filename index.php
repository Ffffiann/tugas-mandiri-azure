<?php include 'config.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>CRUD Azure</title>
</head>
<body>
<h2>Daftar Mahasiswa</h2>
<a href="add.php">Tambah Data</a>
<br><br>

<table border="1" cellpadding="8">
<tr>
    <th>ID</th>
    <th>Nama</th>
    <th>Action</th>
</tr>

<?php
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
while ($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
        <td>".$row['id']."</td>
        <td>".$row['nama']."</td>
        <td>
            <a href='edit.php?id=".$row['id']."'>Edit</a> |
            <a href='delete.php?id=".$row['id']."'>Delete</a>
        </td>
    </tr>";
}
?>
</table>

</body>
</html>
