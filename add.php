<?php include 'config.php';

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    mysqli_query($conn, "INSERT INTO mahasiswa(nama) VALUES('$nama')");
    header("Location: index.php");
    exit;
}
?>

<form method="POST">
    Nama: <input type="text" name="nama">
    <button type="submit" name="submit">Simpan</button>
</form>
