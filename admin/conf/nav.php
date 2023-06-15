<header class="navbar pcoded-header navbar-expand-lg navbar-light header-blue">

	<body class="background-grd-green">


		<div class="m-header">
			<a class="mobile-menu" id="mobile-collapse" href="#!"><span></span></a>
			<a href="#!" class="b-brand">
				<!-- ========   change your logo hear   ============ -->

				<img src="../user/img/lw.png" alt="" class="logo">
			</a>
			<a href="#!" class="mob-toggler">
				<i class="feather icon-more-vertical"></i>
			</a>
		</div>
		<div class="collapse navbar-collapse">

			<ul class="navbar-nav ml-auto">
				<li>

				</li>
				<li>
					<div class="dropdown drp-user">
						<a href="#" class="dropdown-toggle" data-toggle="dropdown">
							<i class="feather icon-user"></i>
						</a>
						<div class="dropdown-menu dropdown-menu-right profile-notification">
							<div class="pro-head">
								<img src="assets/images/user/avatar-5.jpg" class="img-radius" alt="User-Profile-Image">
								<span><?= $_SESSION['nama']; ?></span>
								<a href="auth-signin.html" class="dud-logout" title="Logout">
									<i class="feather icon-log-out"></i>
								</a>
							</div>
							<ul class="pro-body">
								<li><a href="user-profile.html" class="dropdown-item"><i class="feather icon-user"></i> Profile</a></li>

							</ul>
						</div>
					</div>
				</li>
			</ul>
		</div>
	</body>

</header>