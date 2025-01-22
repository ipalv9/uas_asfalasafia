<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nama_produk = $_POST['nama_produk'];
$harga= $_POST['harga'];
$kategori_id = $_POST['kategori_id'];


$nama_foto = $_FILES['gambar_produk']['name'];
$tmp_foto = $_FILES['gambar_produk']['tmp_name'];

#3. menulis query
$simpan = "INSERT INTO tabel_produk (nama_produk,harga,kategori_id,gambar_produk) VALUES ('$nama_produk','$harga',
'$kategori_id','$nama_foto')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

$upload_foto = move_uploaded_file($tmp_foto,"gambar_produk/$nama_foto");

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>