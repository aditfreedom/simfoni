<?php 
// mendapatkan id user dari url
$id_guru = $_GET['id'];

//objek user yang menjalankan fugsi hapus user berdasarkan id_user di url
$guru->hapus_rekapsd($id_guru);
echo "<script>alert('Data terhapus')</script>";
echo "<script>location='index.php?halaman=tampil_rekapsiswa_sd'</script>";
?>