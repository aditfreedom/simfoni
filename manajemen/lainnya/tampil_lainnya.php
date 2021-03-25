<div class="row">
	<div class="col-md-6">
		<h3>Data Kegiatan Lainnya</h3>
		<h3>Sekolah Sukma Bangsa <?php echo ($db_lokasi)?></h3>
	</div>
	<div class="col-md-6">
		<div class="tambah-user hidden-print">
		<a href="index.php?halaman=tambah_lainnya" class="btn btn-primary">Tambah Data Kegiatan Lainnya</a>
			
		</div>
	</div>


</div>
<hr>
 <?php  
// include_once "../config/class.php";

// $semua_jenjang = $jenjang->tampil_jenjang();


$semua_project = $project->tampil_lainnya();
$semua_mapel = $mapel->tampil_mapel();
 
// $semua_mapel2 = $mapel2->tampil_mapel2();
// $semua_mapel3 = $mapel3->tampil_mapel3();
// $semua_mapel4 = $mapel4->tampil_mapel4();

	/*echo "<pre>";
	print_r($semua_project);
	echo "</pre>";
*/
	// // // echo "<pre>";
	// // // print_r($semua_jenjang);
	// // // echo "</pre>";

	// echo "<pre>";
	// print_r($semua_mapel);
	// echo "</pre>";

?>


<!DOCTYPE html>
<html>
<head>
	<title>Data Kegiatan Lainnya</title>
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
</head>
<body>
	
<!-- <form action="upload_laporan_project.php" method="POST" enctype="multipart/form-data">	 -->

<div class="row">
	<div class="col-md-12">
	
		<table class="table table-hover table-striped" id="data-table">
			
			<thead>
				<tr>
					<th>No</th>
					<th>Jenjang & Semester</th>
					<th>Peserta</th>
					<th>Jenis Kegiatan</th>
					<th>Nama Kegiatan</th>
					<th>Koordinator Pelaksana</th>	
					<th>Waktu Pelaksanaan</th>				
					<th>Deskripsi</th>
					<th>Biaya (Rp)</th>
					<th class="hidden-print">Laporan</th>
					<!-- <th class="hidden-print">Proposal</th> -->
					<!-- <th class="hidden-print">Opsi</th> -->
					
				</tr>
			</thead>
				
			<tbody>
				<?php foreach ($semua_project as $key => $value): ?>
			
		<tr>
			<td><?php echo $key+1; ?></td>
			<td><?php echo $value['jenjang'];  ?>  <br> <?php echo $value['semester']; ?> </td>
			
			<td><?php echo $value['kelas']; ?></td>
			<td><?php echo $value['jenis_kegiatan']; ?></td>
			<td><?php echo $value['nama_kegiatan']; ?></td>
			<td><?php echo $value['nama_guru'] ;?></td>
			<td><?php echo tanggal_indo($value['waktu_1']) ?> s/d <?php echo tanggal_indo($value['waktu_2']) ?></td>
			<td><?php echo $value['hasil_kegiatan'] ?></td>
			<td><?php echo $value['biaya_kegiatan'] ?></td>
			<td class="hidden-print"><?php echo $value['laporan'] ?>  <br> <br>
			<!--	<a href="index.php?halaman=upload_laporan_class_project&id_project=<?php // echo $value['id_project']; ?>" class="" >Upload Laporan</a> 	<br>  -->


				<a href="../laporan/lainnya/<?php echo $value['laporan'] ?>" class="btn btn-success" >Download Laporan</a> <br>
				<br><a href="index.php?halaman=hapus_lainnya&id=<?php echo $value['id']; ?>" class="btn btn-danger">Hapus Data</a>  <br>

				
			</td>
			<!-- <td class="hidden-print"><?php //echo $value['proposal'] ?>  <br>
				<a href="index.php?halaman=upload_proposal_class_project&id_project=<?php //echo $value['id_project']; ?>" class="" >Upload</a> 	<br>


				<a href="../laporan/proposal/<?php // echo $value['proposal'] ?>" class="" >Download</a>
				
			</td>
 -->
		

			
			<!-- <td>
				<input type="file" name="upload_file"> <br>
				<input type="submit" name="upload" value="Upload">

			</td> -->
			
		</tr>
		<?php endforeach ?>
					
			</tbody>
		</table>
			<div class="text-right">
</div>
</div>
		
	
<!-- </form> -->
	
</body>
</html>