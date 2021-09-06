<?php include 'config/class.php'; ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>SIMFONI</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="ssb.png"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_asset/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_asset/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_asset/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_asset/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="login_asset/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_asset/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="login_asset/css/util.css">
	<link rel="stylesheet" type="text/css" href="login_asset/css/main.css">
<!--===============================================================================================-->
</head>
<body>
	
	<div class="limiter">
		<div class="container-login100" style="background-image: url('login_asset/images/img-01.jpg');">
			<div class="wrap-login100 p-t-50 p-b-30">
				<form class="login100-form validate-form" method="POST">
					<div class="login100-form-avatar">
						<img src="ssb.png" >
					</div>

					<span class="login100-form-title p-t-20 p-b-45">
						SIMFONI<br>SISTEM INFORMASI MANAJEMEN FORM ONLINE
					</span>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Username is required">
						<input class="input100" type="text" name="username" placeholder="Username">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-user"></i>
						</span>
					</div>

					<div class="wrap-input100 validate-input m-b-10" data-validate = "Password is required">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100"></span>
						<span class="symbol-input100">
							<i class="fa fa-lock"></i>
						</span>
					</div>

					<div class="container-login100-form-btn p-t-10">
						<button class="login100-form-btn" value="LOGIN" name="login">
							Login
						</button>
					</div>
				</form>
			</div>
		</div>
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
					echo "<script>alert('Username Atau Password Salah, Silahkan Menanyakan Informasi Akun Kepada Pusdatin')</script>";
					echo "<script>location='index.php'</script>";
				}
				
			}
	}
	?>

	


	
<!--===============================================================================================-->	
<script src="login_asset/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="login_asset/vendor/bootstrap/js/popper.js"></script>
	<script src="login_asset/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="login_asset/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="login_asset/js/main.js"></script>
</body>
</html>