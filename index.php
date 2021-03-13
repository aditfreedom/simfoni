<?php include 'config/class.php'; ?>

<!DOCTYPE html>
<html>
<head>
<!--	<meta charset="UTF-8">
<meta http-equiv="refresh" content="0; url=http://www.detik.com">
<script type="text/javascript">
window.location.href = "http://www.detik.com"
</script> -->
	<title>SIMFONI</title>
	<link rel="icon" href="ssb.png" type="image/png">
	<link rel="stylesheet" type="text/css" href="assets/css/login_admin.css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

	
</head>
<script src="https://kit.fontawesome.com/2d7830743a.js" crossorigin="anonymous"></script>

<body>
</body>
<br>
<br>
<div class="container">
<h2 align="left">SISTEM INFORMASI MANAJEMEN FORM ONLINE</h2>
<h2 align="left">SEKOLAH SUKMA BANGSA  <?php echo strtoupper ($db_lokasi)?>	</h2>
<hr class="bg-danger" style="border-width:5px;width: 400px;margin-left:0px;">

<div class="kotak_login float-left">
	<img src="logo.png" class="gambar" align="middle">
	<p class="tulisan_login">Silakan Login</p>
	<br/>
	<form method="POST">
		<!--<label>Username</label>-->
		<div class="input-group mb-3">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                </div>
                <input type="text" class="form-control" placeholder="Username" name="username" required>
            </div>
            <div class="input-group mb-3">
            <div class="input-group-prepend">
                    <span class="input-group-text" id="basic-addon1"><i class="fa fa-key"></i></span>
                </div>
                <input type="password" class="form-control" placeholder="Password" name="password" required>
            </div>
			<input type="submit" class="btn btn-info font-weight-bold" style="width:100%;" value="LOGIN" name="login">

		</div>
	</form>
</div>
	<?php 
	if (isset($_POST['login']))
	{
		$cek = $admin->login($_POST['username'], $_POST['password']);
		$cek2 = $manajemen->login_manajemen($_POST['username'], $_POST['password']);
		$cek3 = $konselor->login_konselor($_POST['username'], $_POST['password']);
		$cek4 = $pjruangan->login_pjruangan($_POST['username'], $_POST['password']);
		$cek5 = $pustaka->login_pustaka($_POST['username'], $_POST['password']);
		$cek6 = $waka->login_waka($_POST['username'], $_POST['password']);

				 		// echo "$cek";

		if ($cek=='admin') 
		{
			// echo "<script>alert('login berhasil')</script>";
			echo "<script>location='admin/index.php?halaman=home'</script>";
		} 
		else 
			if ($cek2=='manajemen')  
			{
				echo "<script>location='manajemen/index.php?halaman=home'</script>";
			}
			else 
			if ($cek2=='tatausaha')  
			{
				echo "<script>location='manajemen/index.php?halaman=home'</script>";
			}
		else 
			if ($cek3=="konselor") 
			{
				echo "<script>location='konselor/index.php?halaman=home'</script>";
		}
		else
			if ($cek4=="pjruangan")
			{
				echo "<script>location='pjruangan/index.php?halaman=home'</script>";
			}
		else
			if ($cek5=="pustaka")
			{
				echo "<script>location='pustaka/index.php?halaman=home'</script>";
			}
		else
			if ($cek6=="waka")
			{
				echo "<script>location='waka/index.php?halaman=home'</script>";
			}
		else
			{
				$cek_pengguna = $pengguna->login($_POST['username'], $_POST['password']);
				if ($cek_pengguna == "pengguna") 
				{
					$level_pengguna = $_SESSION['pengguna']['nama_jenjang'];
					echo "<script>location='pengguna/$level_pengguna/index.php?halaman=home'</script>";
				} 
				else
				{
					echo "<script>alert('login gagal')</script>";
					echo "<script>location='index.php'</script>";
				}
				
			}
	}
	?>

	
</div>
</div>

</main>

</body>
</html>