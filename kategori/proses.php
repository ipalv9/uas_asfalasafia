
<?php
#1. koneksikan file ini
include("../koneksi.php");

#2. mengambil value dari form
$nama_kategori = $_POST['nama_kategori'];


#3. menulis query
$simpan = "INSERT INTO tabel_kategori (nama_kategori) VALUES ('$nama_kategori')";

#4. jalankan query
$proses = mysqli_query($koneksi, $simpan);

#5. mengalihkan halaman
// header("location:index.php");
?>
<script>
    document.location="index.php";
</script>
