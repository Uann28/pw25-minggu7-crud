function konfirmasiHapus(nama) {
    return confirm("Yakin ingin menghapus pembelian atas nama: " + nama + "?");
}

function validasiForm() {
    const nama = document.forms["formTiket"]["nama_pembeli"].value;
    const film = document.forms["formTiket"]["judul_film"].value;
    if (nama == "" || film == "") {
        alert("Nama dan Judul Film wajib diisi!");
        return false;
    }
    return true;
}

document.addEventListener("DOMContentLoaded", function() {
    const today = new Date().toISOString().split('T')[0];
    const tanggalInput = document.getElementById("tanggal_nonton");
    if (tanggalInput) tanggalInput.value = today;
});