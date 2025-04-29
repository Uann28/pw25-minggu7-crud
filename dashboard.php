<?php include 'db.php'; ?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Aktivitas Pembelian</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>
<body>
<div class="navbar">
    <div class="logo">BIOSKOP ONLINE</div>
    <div>
        <a href="index.php">Home</a>
        <a href="dashboard.php">Dashboard</a>
        <a href="tambah.php">+ Beli Tiket</a>
    </div>
</div>

<div class="container">
    <h2>Aktivitas Pembelian Tiket</h2>
    <div class="table-wrapper">
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Film</th>
                <th>Jumlah</th>
                <th>Tanggal</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $no = 1;
            $result = $koneksi->query("SELECT * FROM crud_061 ORDER BY tanggal_nonton DESC");
            while ($row = $result->fetch_assoc()): ?>
            <tr>
                <td><?= $no++ ?></td>
                <td><?= $row['nama_pembeli'] ?></td>
                <td><?= $row['email'] ?></td>
                <td><?= $row['judul_film'] ?></td>
                <td><?= $row['jumlah_tiket'] ?></td>
                <td><?= $row['tanggal_nonton'] ?></td>
                <td>
                    <a href="edit.php?id=<?= $row['id'] ?>">Edit</a> |
                    <a href="#" class="btn-hapus" data-id="<?= $row['id'] ?>">Hapus</a>
                </td>
            </tr>
            <script>
            document.querySelectorAll('.btn-hapus').forEach(button => {
                button.addEventListener('click', function (e) {
                    e.preventDefault();
                    const id = this.getAttribute('data-id');
                    Swal.fire({
                        title: 'Yakin ingin menghapus?',
                        text: 'Data yang dihapus tidak bisa dikembalikan!',
                        icon: 'warning',
                        showCancelButton: true,
                        confirmButtonColor: '#d33',
                        cancelButtonColor: '#3085d6',
                        confirmButtonText: 'Ya, hapus!'
                    }).then((result) => {
                        if (result.isConfirmed) {
                            window.location.href = 'hapus.php?id=' + id;
                        }
                    });
                });
            });
            </script>
            <?php endwhile; ?>
        </tbody>
    </table>
    </div>
</div>
</body>
</html>