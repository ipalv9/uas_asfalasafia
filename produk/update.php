<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$id_produk = $_POST['id_produk'];
$nama_produk = $_POST['nama_produk'];
$harga = $_POST['harga'];
$kategori_produk = $_POST['kategori_produk'];


#3. menulis query
$sunting = "UPDATE tabel_produk SET nama_produk='$nama_produk', harga='$harga', kategori=_produk'$kategori_produk'
 WHERE id='$id'";

#4. jalankan query
$proses = mysqli_query($koneksi, $sunting);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>