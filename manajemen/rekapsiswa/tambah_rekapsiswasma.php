<h1>Tambah Data Rekap Siswa SMA</h1>
<hr>

<?php 
	// $data_mapel1 = $mapel1->tampil_mapel1();
	// $data_mapel2 = $mapel2->tampil_mapel2();
	// $data_mapel3 = $mapel3->tampil_mapel3();
	
	


	// echo "<pre>";
	// print_r($data_jenjang);
	// echo "</pre>";

	// echo "<pre>";
	// print_r($data_mapel);
	// echo "</pre>";

	// echo "<pre>";
	// print_r($data_jenjang);
	// echo "</pre>";
?>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

		<form method="POST">						
			<div class="form-group">
			<label>Tahun Ajaran</label>
			<input type="text" name="tahun_ajaran" class="form-control" required="">
			</div>
			<h3><b>Kelas X</b></h3>
			<hr>
			<div class="form-group">
				<label>Jumlah Siswa Laki-Laki</label>
				<input type="number" name="lk1" class="form-control" >
			</div>
			<div class="form-group">
				<label>Jumlah Siswa Perempuan</label>
				<input type="number" name="pr1" class="form-control">
			</div>
			<h3><b>Kelas XI</b></h3>
			<hr>
			<div class="form-group">
				<label>Jumlah Siswa Laki-Laki</label>
				<input type="number" name="lk2" class="form-control" >
			</div>
			<div class="form-group">
				<label>Jumlah Siswa Perempuan</label>
				<input type="number" name="pr2" class="form-control">
			</div>
			<h3><b>Kelas XII</b></h3>
			<hr>
			<div class="form-group">
				<label>Jumlah Siswa Laki-Laki</label>
				<input type="number" name="lk3" class="form-control" >
			</div>
			<div class="form-group">
				<label>Jumlah Siswa Perempuan</label>
				<input type="number" name="pr3" class="form-control">
			</div>
			
			
			<button class="btn btn-primary" name="simpan" style="width:100%;">Simpan</button>

		</form>

		<?php 
			if (isset($_POST['simpan']))
			{
				$guru->simpan_rekapsma($_POST['tahun_ajaran'], $_POST['lk1'], $_POST['pr1'], $_POST['lk2'], $_POST['pr2'], $_POST['lk3'], $_POST['pr3']);
				echo "<script>alert('data tersimpan')</script>";
				echo "<script>location='index.php?halaman=tampil_rekapsiswa_sma'</script>";
			}
		?>

