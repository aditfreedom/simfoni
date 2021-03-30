<h1>Tambah Data Kegiatan Lainnya</h1>
		<hr>




<?php 
	// $data_mapel1 = $mapel1->tampil_mapel1();
	// $data_mapel2 = $mapel2->tampil_mapel2();
	// $data_mapel3 = $mapel3->tampil_mapel3();
	$data_mapel = $mapel->tampil_mapel();
	$data_mapel1 = $mapel1->tampil_mapel1_admin();
	$data_mapel2 = $mapel2->tampil_mapel2_admin();
	$data_mapel3 = $mapel3->tampil_mapel3_admin();
	$data_mapel4 = $mapel4->tampil_mapel4_admin();
	$data_kelas = $kelas->tampil_kelas_admin();
	$data_kelas2 = $kelas2->tampil_kelas2_admin();
	$data_kelas3= $kelas3->tampil_kelas3_admin();
	$data_kelas4 = $kelas4->tampil_kelas4_admin();
	$data_jenjang = $jenjang->tampil_jenjang();
	$data_semester = $semester->tampil_semester_admin();
	$data_guru = $guru->tampil_guru();



	// echo "<pre>";
	// print_r($data_jenjang);
	// echo "</pre>";

	/*echo "<pre>";
	print_r($data_mapel);
	echo "</pre>";*/

	// echo "<pre>";
	// print_r($data_jenjang);
	// echo "</pre>";
?>
<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">

<div class="row">
			<form method="POST" enctype="multipart/form-data">			
					
			<div class="form-group">
				<label>Level</label>
				<select class="form-control" name="jenjang">
					<!-- <option value="">Pilih Level</option> -->
				<?php foreach ($data_jenjang as $key => $value): ?>
					<option value="<?php echo $value['nama_jenjang'] ?>" > <?php echo $value['nama_jenjang'] ?> </option>					
				<?php endforeach ?>					
				</select>
			</div>

			<div class="form-group">
				<label>Semester</label>
				<select class="form-control" name="semester">
					<option value="">Pilih Semester</option>
				<?php foreach ($data_semester as $key => $value): ?>
					<option value="<?php echo $value['nama_semester'] ?>" > <?php echo $value['nama_semester'] ?> </option>					
				<?php endforeach ?>					
				</select>
			</div>

			<div class="form-group">
				<label>Kelas</label>
				<input type="text" name="kelas" class="form-control" required="" >
			</div>

			<div class="form-group">
				<label>Jenis Kegiatan</label>
				<select class="form-control" name="jenis_kegiatan">
					<option value="Ekstrakulikuler" >Ekstrakulikuler</option>	
					<option value="Non Ekstrakulikuler" >Non Ekstrakulikuler</option>									
				</select>
			</div>

			<div class="form-group">
				<label>Nama Kegiatan</label>
				<input type="text" name="nama_kegiatan" class="form-control" required="" >
			</div>

		

			<div class="form-group">
				<label>Koordinator Kegiatan</label>
				<select class="form-control" name="nama_guru">
				<?php foreach ($data_guru as $key => $value): ?>
					<option value="<?php echo $value['id_guru'] ?>" > <?php echo $value['nama_guru'] ?> </option>					
				<?php endforeach ?>					
				</select>
			</div>

			
			<div class="form-group">
					<label>Waktu Pelaksanaan</label>
					<input type="date" name="waktu_1" class="" required=""> 	
					<b>s/d</b>	
					<input type="date" name="waktu_2" class="" required="">	
			</div>


			<div class="form-group">
				<label>Deskripsi</label>
				<input type="text" name="hasil_kegiatan" class="form-control" required="" placeholder="Deskripsi kegiatan" maxlength="490">
			</div>

			<div class="form-group">
				<label>Perkiraan Biaya - (Rp)</label>
				<input type="text" name="biaya_kegiatan" class="form-control" required="" placeholder="Dalam bentuk angka">
			</div>

			<div class="form-group">
				<label>Upload Laporan</label>
				<input type="file" name="laporan" class="form-control" >
			</div>
			
			<button class="btn btn-primary" name="simpan" style="width:100%;"><b>Simpan</b></button>

		</form>

		<?php 
			if (isset($_POST['simpan']))
			{
				$nama = $_FILES['laporan']['name'];
				$lokasi = $_FILES['laporan']['tmp_name'];
				$extension = pathinfo($nama, PATHINFO_EXTENSION);
				$nama2       = md5($nama).'.'.$extension;
				move_uploaded_file($lokasi, "../laporan/lainnya/$nama2");


				$project->simpan_lainnya($_POST['jenjang'], $_POST['semester'], $_POST['kelas'], $_POST['jenis_kegiatan'], $_POST['nama_kegiatan'],  $_POST['nama_guru'], $_POST['waktu_1'], $_POST['waktu_2'], $_POST['hasil_kegiatan'], $_POST['biaya_kegiatan'], $nama2);



				echo "<script>alert('data tersimpan')</script>";
				echo "<script>location='index.php?halaman=tampil_lainnya'</script>";

				
			}
			
		?>

</div>