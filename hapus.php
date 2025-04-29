<?php
include 'db.php';
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $stmt = $koneksi->prepare("DELETE FROM crud_061 WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    header("Location: dashboard.php?hapus=sukses");
    exit();
}
?>
