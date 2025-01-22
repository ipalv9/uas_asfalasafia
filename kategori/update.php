<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_kategori = $_POST['id'];
$nama_kategori = $_POST['nama_kategori'];


#3. menulis query
$sunting = "UPDATE tabel_kategori SET nama_kategori='$nama_kategori' WHERE id_kategori='$id_kategori'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>