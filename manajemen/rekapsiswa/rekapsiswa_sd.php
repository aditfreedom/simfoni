<div class="row">
	<div class="col-md-6">
		<h1>DATA REKAP SISWA <br> SD SUKMA BANGSA BIREUEN</h1>
	</div>
	<div class="col-md-6">
		<div class="tambah-user">
		<a href="index.php?halaman=tambah_rekapsiswasd" class="btn btn-primary">Tambah</a>
			
		</div>
	</div>


</div>
<hr>

<?php 
	// $user adalah objek user dari class.php
	// tampil_user adalah fungsi pada class user dari class.php
	// objek user menjalankan fungsi tampil user

	$data_guru = $guru->rekapsiswa_sd();
	$data_jenjang = $jenjang->tampil_jenjang_admin();

// 	echo "<pre>";
// print_r($data_pengguna);
// echo "</pre>";
?>
<!-- melihat isi array data user -->
<!-- <pre><?php //print_r($data_user); ?></pre>  -->

<table class="table table-hover table-bordered" id="data-table" >
	<thead>
		<tr>
			<th rowspan="3" class="text-center">Tahun Ajaran</th>			
			<th colspan="18" class="text-center">Kelas</th>
			<th rowspan="3" class="text-center">Total</th>
			<th rowspan="3" class="text-center">Opsi</th>
		</tr>
		
		<tr>
		<th colspan="3" class="text-center">I</th>
		<th colspan="3" class="text-center">II</th>
		<th colspan="3" class="text-center">III</th>
		<th colspan="3" class="text-center">IV</th>
		<th colspan="3" class="text-center">V</th>
		<th colspan="3" class="text-center">VI</th>
		</tr>

		<tr>
		<th class="text-center">LK</th>
		<th class="text-center">PR</th>
		<th class="text-center">JLH</th>
		<th class="text-center">LK</th>
		<th class="text-center">PR</th>
		<th class="text-center">JLH</th>
		<th class="text-center">LK</th>
		<th class="text-center">PR</th>
		<th class="text-center">JLH</th>
		<th class="text-center">LK</th>
		<th class="text-center">PR</th>
		<th class="text-center">JLH</th>
		<th class="text-center">LK</th>
		<th class="text-center">PR</th>
		<th class="text-center">JLH</th>
		<th class="text-center">LK</th>
		<th class="text-center">PR</th>
		<th class="text-center">JLH</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_guru as $key => $value): ?>
			
		<tr>
		<td class="text-center"><?= $value['tahun_ajaran']; ?></td>
		<td class="text-center"><?= $value['lk1']; ?></td>
		<td class="text-center"><?= $value['pr1']; ?></td>
		<td class="text-center"><b><?= $value['lk1']+$value['pr1']; ?></b></td>
		<td class="text-center"><?= $value['lk2']; ?></td>
		<td class="text-center"><?= $value['pr2']; ?></td>
		<td class="text-center"><b><?= $value['lk2']+$value['pr2']; ?></b></td>
		<td class="text-center"><?= $value['lk3']; ?></td>
		<td class="text-center"><?= $value['pr3']; ?></td>
		<td class="text-center"><b><?= $value['lk3']+$value['pr3']; ?></b></td>
		<td class="text-center"><?= $value['lk4']; ?></td>
		<td class="text-center"><?= $value['pr4']; ?></td>
		<td class="text-center"><b><?= $value['lk4']+$value['pr4']; ?></b></td>
		<td class="text-center"><?= $value['lk5']; ?></td>
		<td class="text-center"><?= $value['pr5']; ?></td>
		<td class="text-center"><b><?= $value['lk5']+$value['pr5']; ?></b></td>
		<td class="text-center"><?= $value['lk6']; ?></td>
		<td class="text-center"><?= $value['pr6']; ?></td>
		<td class="text-center"><b><?= $value['lk6']+$value['pr6']; ?></b></td>
		<td class="text-center"><b><?= $value['lk1']+$value['pr1']+$value['lk2']+$value['pr2']+$value['lk3']+$value['pr3']+$value['lk4']+$value['pr4']
								+$value['lk5']+$value['pr5']+$value['lk6']+$value['pr6']; ?></b></td>



			
			<td>
				<a href="index.php?halaman=edit_rekapsiswasd&id=<?php echo $value['id'] ?>" class="btn btn-warning">Edit</a>
				<a href="index.php?halaman=hapus_rekapsiswasd&id=<?php echo $value['id']; ?>" class="btn btn-danger" onclick="return confirm('hapus data?')">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>
<h4 style="color:red;font-weight:bold;">*Dihitung per 1 Januari</h4>