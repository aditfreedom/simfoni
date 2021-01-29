<div class="row">
	<div class="col-md-6">
		<h1>DATA REKAP SISWA <br> SD SUKMA BANGSA BIREUEN</h1>
	</div>
	<div class="col-md-6">
		<div class="tambah-user">
		<a href="index.php?halaman=tambah_rekapsiswa" class="btn btn-primary">Tambah</a>
			
		</div>
	</div>


</div>
<hr>

<?php 
	// $user adalah objek user dari class.php
	// tampil_user adalah fungsi pada class user dari class.php
	// objek user menjalankan fungsi tampil user
	$data_guru = $guru->tampil_kepegawaian();
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
			<th rowspan="3" class="text-center">Sub Total</th>
			<th rowspan="3" class="text-center">Opsi</th>
		</tr>
		
		<tr>
		<td colspan="3" class="text-center">I</td>
		<td colspan="3" class="text-center">II</td>
		<td colspan="3" class="text-center">III</td>
		<td colspan="3" class="text-center">IV</td>
		<td colspan="3" class="text-center">V</td>
		<td colspan="3" class="text-center">VI</td>
		</tr>

		<tr>
		<td class="text-center">LK</td>
		<td class="text-center">PR</td>
		<td class="text-center">JLH</td>
		<td class="text-center">LK</td>
		<td class="text-center">PR</td>
		<td class="text-center">JLH</td>
		<td class="text-center">LK</td>
		<td class="text-center">PR</td>
		<td class="text-center">JLH</td>
		<td class="text-center">LK</td>
		<td class="text-center">PR</td>
		<td class="text-center">JLH</td>
		<td class="text-center">LK</td>
		<td class="text-center">PR</td>
		<td class="text-center">JLH</td>
		<td class="text-center">LK</td>
		<td class="text-center">PR</td>
		<td class="text-center">JLH</td>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($data_guru as $key => $value): ?>
			
		<tr>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>
		<td class="text-center">-</td>



			<!-- <td><?php echo $key+1; ?></td>
			<td><?php echo $value['nama_pegawai']; ?></td>
			<td><?php echo $value['jk']; ?></td>
			<td><?php echo $value['nip']; ?></td>
			<td><?php echo $value['jk']; ?></td>
			<td><?php echo $value['lulus']; ?></td>
			<td><?php echo $value['status']; ?></td>	
			 -->
			
			<td>
				<a href="index.php?halaman=edit_kepegawaian&id=<?php echo $value['id'] ?>" class="btn btn-warning">Edit</a>
				<a href="index.php?halaman=hapus_kepegawaian&id=<?php echo $value['id']; ?>" class="btn btn-danger" onclick="return confirm('hapus data <?php echo $value["nama_guru"]; ?> ?')">Hapus</a>
			</td>
		</tr>
		<?php endforeach ?>
	</tbody>
</table>