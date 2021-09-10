<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale = 1.0"/>
	<meta name="description" content="Web sakti ciptaan Ade"/>
	<meta name="Author" content="Ade Ilham Febryan"/>
	<meta name="keywords" content="Schoolz, Urice, ade, Ilham, Febryan"/>
	<meta property="og:type" content="article" />
	<meta property="og:title" content="Anak bangsat gausah klik!"/>
	<meta property="og:description" content="IG : 0lima02"/>
	<meta property="og:url" content="https://wa.me/6281532972236"/>
	<meta property="og:image" content="#"/>
	<title>Schoolz</title>
	<link rel="stylesheet" type="text/css" href="assets/css/sekolah.css">
	<link rel="icon" type="image/png" href="assets/image/logo.png">
	<script type="text/javascript" src="assets/js/sekolah.js"></script>
</head>
<body>
	<div class="header">
		<div class="menu">
			<div class="logo">
				<a href="https://instagram.com/0lima02" target="blank">
					<img src="assets/image/logo.png">
				</a>
			</div>
			<div class="main-menu">
				<a href="http://localhost/sch/sekolah">Home</a>
				<a href="#news">News</a>
				<a href="#activity">Activity</a>
				<div class="dropdown">
					<a href="#tools">Tools</a>
					<div class="dropdown-item">
						<a href="#karpel">Card</a>
						<a href="#vaksin">Vaksin</a>
					</div>
				</div>
				<a onclick="document.getElementById('login-form').style.display = 'block'">Login</a>
			</div>
		</div>
		<div class="sub-menu" id="sub-menu">
			<div class="left-sub">
				<a href="#event">Event</a>
				<a href="#fasilitas">Fasilitas</a>
				<a href="#prestasi">Prestasi</a>
				<div class="dropdown">
					<a href="#kelas">Kelas</a>
					<div class="dropdown-item sub-drop">
						<a href="#x">X</a>
						<a href="#xi">XI</a>
						<a href="#xii">XII</a>
					</div>
				</div>
			</div>
			<div class="right-sub">
				<a href="https://instagram.com/0lima02" target="blank">IG Adminnya</a>
			</div>
		</div>
		<div id="login-form">
			<form class="login-content animate" action="module/submit.php" method="post">
				<span onclick="document.getElementById('login-form').style.display = 'none'" class="close" title="Close">
					&times;
				</span>
				<div class="avacon">
					<img src="assets/image/avatar.png" class="avatar" alt="Avatar, Avatar the Legend of Aang">
				</div>
				<div class="form">
					<input type="text" name="uname" placeholder="Username..." required title="Masukin username klean">
					<input type="password" name="password" placeholder="Password..." required title="Masukin passwornya yang bener">
					<button type="submit" class="btn" title="Mari kita login">Login</button>
					<label>Belum punya akun?, tanya admin!</label>
				</div>
				<div class="form foot">
					<button type="button" onclick="document.getElementById('login-form').style.display = 'none'" class="btn cancel">
						Cancel
					</button>
					<span class="forgot"><a href="#">forgot password?</a></span>
				</div>
			</form>
		</div>
		<div class="judul">
			<h1>SchoolZ</h1>
			<p>
				Sekolah tidak perlu, Bolos daring nomor satu.
				<br>
				<br>
				IG : 0lima02
			</p>
		</div>
	</div>
	<div class="main">
		 <div class="konten">
		 	<div class="isi-konten">
		 		<div class="judul-konten">
		 			<div id="tag">
		 				<p id="isi-tag">Event</p>
		 			</div>
		 			<div id="poster">
		 				<p>Ade Ilham Febryan | 2021</p>
		 				<hr>
		 			</div>
			 		<h2>Vaksinasi sebagai salah satu syarat PTM</h2>
			 	</div>
			 	<div class="main-konten">
			 		<img src="assets/image/konten/vaksin.jpg">
			 		<p>
			 			Untuk melaksanakan PTM pasca pandemi ini salah satu syaratnya ialah vaksinasi siswa.
			 		</p>
			 	</div>
		 	</div>
		 	<div class="isi-konten">
		 		<div class="judul-konten">
		 			<div id="tag">
		 				<p id="isi-tag">Prestasi</p>
		 			</div>
		 			<div id="poster">
		 				<p>Ade Ilham Febryan | 2021</p>
		 				<hr>
		 			</div>
			 		<h2>Siswa tertampan memenangkan lomba Kihajar STEM 2021</h2>
			 	</div>
			 	<div class="main-konten">
			 		<img src="assets/image/konten/anteng.jpg">
			 		<p>
			 			Ade Ilham Febryan selaku siswa tertampan telah memenangkan lomba KIHAJAR STEM 2021 yang dilaksanakan pada 27 Juni - 17 September 2021
			 		</p>
			 	</div>
			 </div>
		 </div>
	</div>
	<div class="footer">
		<div class="desc">
			<h3>Ade Ilham Febryan &copy; 2021</h3>
			<p>siswa tertampan sepanjang masa</p>
		</div>
		
	</div>
</body>
</html>