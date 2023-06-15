<nav class="pcoded-navbar">
	<div class="navbar-wrapper  ">
		<div class="navbar-content scroll-div ">

			<div class="">
				<div class="main-menu-header">
					<img class="img-radius" src="img/22.png" alt="User-Profile-Image">
					<div class="user-details">
						<div id="more-details"> <?= $_SESSION['nama']; ?> <i class="fa fa-caret-down"></i></div>
					</div>
				</div>
				<div class="collapse" id="nav-user-link">
					<ul class="list-inline">
						<li class="list-inline-item"><a href="user-profile.html" data-toggle="tooltip" title="View Profile"><i class="feather icon-user"></i></a></li>
						<li class="list-inline-item"><a href="conf/logout.php" data-toggle="tooltip" title="Logout" class="text-danger"><i class="feather icon-power"></i></a></li>
					</ul>
				</div>
			</div>

			<ul class="nav pcoded-inner-navbar ">
				<li class="nav-item pcoded-menu-caption">
					<label>Navigation</label>
				</li>
				<li class="nav-item pcoded-hasmenu">


				<li class="nav-item"><a href="beranda.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-home"></i></span><span class="pcoded-mtext">Dashboard</span></a></li>

				<li class="nav-item pcoded-menu-caption">
					<label>MENU</label>
				</li>

				<li class="nav-item"><a href="penduduk.php" class="nav-link "><span class="pcoded-micon"><i class="feather icon-user"></i></span><span class="pcoded-mtext">Data Penduduk</span></a></li>






				</li>



				<li class="nav-item pcoded-hasmenu">
					<a href="#!" class="nav-link "><span class="pcoded-micon"><i class="feather icon-layout"></i></span><span class="pcoded-mtext">Administrasi Surat</span></a>
					<ul class="pcoded-submenu">

						<li><a href="domisili.php" target="">SK Belum Berkerja</a></li>
						<li><a href="domisili.php" target="">SK Domisili</a></li>
						<li><a href="usaha.php" target="">SK Kehilangan</a></li>
						<li><a href="kurangmampu.php" target="">SK Kelakuan Baik</a></li>
						<li><a href="kurangmampu.php" target="">SK Meninggal Dunia</a></li>
						<li><a href="kurangmampu.php" target="">SK Tidak Mampu</a></li>
						<li><a href="kurangmampu.php" target="">SK Usaha</a></li>
					</ul>
				</li>






			</ul>



		</div>
	</div>
</nav>