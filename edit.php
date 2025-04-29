<?php
include 'db.php';
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM crud_061 WHERE id=$id");
$row = mysqli_fetch_assoc($data);
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Pembelian Tiket</title>
    <link rel="stylesheet" href="style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="script.js" defer></script>
</head>
<body>
<div class="navbar">
    <div class="logo">🎬 Bioskop Online</div>
    <div>
        <a href="index.php">Home</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="tambah.php">+ Beli Tiket</a>
    </div>
</div>

<div class="container">
    <h2>Edit Data Tiket</h2>
    <form action="edit.php?id=<?= $id ?>" method="POST" class="form-box">
        <input type="text" name="nama_pembeli" value="<?= $row['nama_pembeli'] ?>" placeholder="Nama Pembeli" required>
        <input type="email" name="email" value="<?= $row['email'] ?>" placeholder="Email" required>
        <input type="text" name="judul_film" value="<?= $row['judul_film'] ?>" placeholder="Judul Film" required>
        <input type="number" name="jumlah_tiket" value="<?= $row['jumlah_tiket'] ?>" placeholder="Jumlah Tiket" required>
        <input type="date" name="tanggal_nonton" value="<?= $row['tanggal_nonton'] ?>" required>
        <input type="submit" value="Update">
    </form>
</div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $koneksi->prepare("UPDATE crud_061 SET nama_pembeli=?, email=?, judul_film=?, jumlah_tiket=?, tanggal_nonton=? WHERE id=?");
    $stmt->bind_param("sssdsi", $_POST['nama_pembeli'], $_POST['email'], $_POST['judul_film'], $_POST['jumlah_tiket'], $_POST['tanggal_nonton'], $_POST['id']);
    $stmt->execute();
    echo "
    <script src='https://cdn.jsdelivr.net/npm/sweetalert2@11'></script>
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Data berhasil diupdate.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href = 'dashboard.php';
        });
    </script>
    ";
    exit();
}
?>

