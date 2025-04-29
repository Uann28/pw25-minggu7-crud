<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Tambah Pembelian Tiket</title>
        <link rel="stylesheet" href="style.css">
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script src="script.js"></script>
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
    <h2>Form Tambah Pembelian Tiket</h2>
    <form name="formTiket" action="tambah.php" method="POST" onsubmit="return validasiForm()" class="form-box">
        <input type="text" name="nama_pembeli" placeholder="Nama Pembeli">
        <input type="email" name="email" placeholder="Email">
        <input type="text" name="judul_film" placeholder="Judul Film">
        <input type="number" name="jumlah_tiket" placeholder="Jumlah Tiket">
        <input type="date" name="tanggal_nonton" id="tanggal_nonton">
        <input type="submit" value="Simpan">
    </form>
</div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $stmt = $koneksi->prepare("INSERT INTO crud_061 (nama_pembeli, email, judul_film, jumlah_tiket, tanggal_nonton) VALUES (?, ?, ?, ?, ?)");
    $stmt->bind_param("sssds", $_POST['nama_pembeli'], $_POST['email'], $_POST['judul_film'], $_POST['jumlah_tiket'], $_POST['tanggal_nonton']);
    $stmt->execute();
    echo "
    <script>
        Swal.fire({
            title: 'Berhasil!',
            text: 'Tiket berhasil dibeli.',
            icon: 'success',
            confirmButtonText: 'OK'
        }).then(() => {
            window.location.href = 'index.php';
        });
    </script>
    ";
    exit();
}
?>
