<?php include 'config.php';

$id = $_GET['id'];
$data = mysqli_fetch_assoc(mysqli_query($conn, "SELECT * FROM mahasiswa WHERE id=$id"));

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    mysqli_query($conn, "UPDATE mahasiswa SET nama='$nama' WHERE id=$id");
    header("Location: index.php");
    exit;
}
?>

<form method="POST">
    Nama: 
    <input type="text" name="nama" value="<?php echo $data['nama']; ?>">
    <button type="submit" name="submit">Update</button>
</form>
