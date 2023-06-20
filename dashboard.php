<?php 
include 'db.php';
	session_start();
	if($_SESSION['status_login'] != true){
		echo '<script>window.location="login.php"</script>';
	}
	
	$query = mysqli_query($conn, "SELECT * FROM tb_admin WHERE admin_id = '".$_SESSION['id']."' ");
	$d = mysqli_fetch_object($query);
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<link href="https://fonts.googleapis.com/css2?family=Quicksand&display=swap" rel="stylesheet">
</head>
<body>
	<!-- header -->
	<header>
		<div class="container">
			<h1><a href="dashboard.php">RY Store</a></h1>
			<ul>
				<li><a href="dashboard.php">Dashboard</a></li>
				<li><a href="profil.php">Profil</a></li>
				<li><a href="data-kategori.php">Data Kategori</a></li>
				<li><a href="data-produk.php">Data Produk</a></li>
				<li><a href="keluar.php">Keluar</a></li>
				<li><a href="index.php">Lihat</a></li>
			</ul>
		</div>
	</header>

	<!-- content -->
	<div class="section">
		<div class="container">
			<h3>Dashboard</h3>
			<div class="box">
				<h4>Selamat Datang <?php echo $_SESSION['a_global']->admin_name ?> di Toko Online</h4>
				<div class="foto">
					<img src="img/imageme.jpg" class="profil">
					<div class="txt">
                     <ul>
						<li>Nama : <?php echo $d->admin_name ?> </li>
						<li>TTL : 5 juli 2006</li>
						<li>Lokasi : JL Raya puncak bogor kecamatan megamendung desa gadog kp sukabirus</li>
						<li>Hoby  : olahraga(futsal,berenang) go for a walk</li>
						<li>bidang keahlian : full stack developer (aamiin)</li>
						<li>gol darah: B+</li>
					 </ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>