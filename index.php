<!DOCTYPE html>
<html lang="en">

<head>

	<title>SID DESA</title>
	<!-- HTML5 Shim and Respond.js IE11 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 11]>
		<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
		<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
	<!-- Meta -->
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
	<meta http-equiv="X-UA-Compatible" content="IE=edge" />
	<meta name="description" content="" />
	<meta name="keywords" content="">
	<meta name="author" content="Phoenixcoded" />
	<!-- Favicon icon -->
	<link rel="icon" href="admin/assets/images/favicon.ico" type="image/x-icon">

	<!-- vendor css -->
	<link rel="stylesheet" href="admin/assets/css/style.css">




</head>

<!-- [ signin-img ] start -->
<form method="POST" action="admin/conf/login.php">

	<div class="auth-wrapper align-items-stretch aut-bg-img">
		<div class="flex-grow-1">
			<div class="h-100 d-md-flex align-items-center auth-side-img">
				<div class="col-sm-10 auth-content w-auto">
					<h1 class="text-blcak my-4" style="color: black">Welcome Back!</h1>
					<h4 class="text-white font-weight-normal">DI SISTEM INFORMASI DESA</h4>
				</div>
			</div>
			<div class="auth-side-form">
				<div class=" auth-content">
					<img src="assets/images/auth/auth-logo-dark.png" alt="" class="img-fluid mb-4 d-block d-xl-none d-lg-none">
					<h3 class="mb-4 f-w-400">Selamat Datang</h3>
					<div class="form-group mb-3">
						<label class="floating-label" for="Email">Masukan Email address</label>
						<input type="text" class="form-control" name="email" autocomplete="off" placeholder="">
					</div>
					<div class="form-group mb-4">
						<label class="floating-label" for="Password">Masukan Kata Sandi</label>
						<input type="password" class="form-control" name="password" autocomplete="off" placeholder="">
					</div>
					<div class="custom-control custom-checkbox text-left mb-4 mt-2">
						<input type="checkbox" class="custom-control-input" id="customCheck1">
						<label class="custom-control-label" for="customCheck1">Simpan Kata Sandi.</label>
					</div>
					<button class="btn btn-block btn-primary mb-4" type="submit">Masuk</button>

				</div>
			</div>
		</div>
	</div>
</form>

<!-- [ signin-img ] end -->

<!-- Required Js -->
<script src="admin/assets/js/vendor-all.min.js"></script>
<script src="admin/assets/js/plugins/bootstrap.min.js"></script>
<script src="admin/assets/js/ripple.js"></script>
<script src="admin/assets/js/pcoded.min.js"></script>



</body>

</html>