 <?php
	require 'adminPermission2.inc';
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Halaman Utama</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="./newStyle.css">
</head>
<body class="body1">
	<form name= "myform" action="private2.php" method="POST">
	<div class="leftbox"></div>
	<div class="rightbox">
		<div class="home1">Detail 2</div>
	</div>
	<div class="mainbox"></div>
	<table class="tablePrivate2">
		<tr>
			<td colspan="4"><h3>Riwayat Pendidikan Tingkat SD-SMA</h3></td>
		</tr>
		<tr>
			<th>Nama Sekolah</th><th>Tahun Masuk</th><th>Tahun Lulus</th><th>Website</th>
		</tr>
		<tr>
			<td>SDN Talang 3</td><td>2004</td><td>2010</td><td><a href="https://dapo.dikdasmen.kemdikbud.go.id/sekolah/dd559f3a9327acd255db">SDN TALANG 3</a></td>
		</tr>
		<tr>
			<td>MTS NEGERI TERATE P.S</td><td>2010</td><td>2013</td><td><a href="http://www.mtsn1sumenep.sch.id/http://www.mtsn1sumenep.sch.id/">MTS NEGERI TERATE P.S</a></td>
		</tr>
		<tr>
			<td>SMKN 1 SUMENEP</td><td>2014</td><td>2017</td><td><a href="http://smk1smn.sch.id/">SMK NEGERI 1 SUMENEP</a></td>
		</tr>
		<tr>
			<td colspan="4"></td>
		</tr>
		<tr>
			<td colspan="4"><h3>Riwayat Pendidikan Tingkat Universitas</h3></td>
		</tr>
		<tr>
			<th>Nama Universitas</th><th>Tahun Masuk</th><th>Website</th><th>Mata Kuliah Diambil</th>
		</tr>
		<tr>
			<td>Universitas Trunojoyo Madura</td><td>2017</td><td><a href="www.trunojoyo.ac.id">UTM</a></td>
			<td>
				<select name="MataKuliah" id="MataKuliah">
					<option value="1">Algoritma Pemrograman</option>
					<option value="2">Pengantar Informatika</option>
					<option value="3">Bahasa Indonesia</option>
					<option value="4">Bahasa Inggris</option>
					<option value="5">Pendidikan Agama Islam</option>
					<option value="6">Matematika</option>
					<option value="7">Logika Informatika</option>
					<option value="8">Pendidikan Kewarganegaraan</option>
					<option value="9">Statistika</option>
					<option value="10">Fisika Informatika</option>
					<option value="11">Organisasi Komputer</option>
					<option value="12">Dasar Pemrograman WEB</option>
					<option value="13">Struktur Data</option>
					<option value="14">Komputasi Aljabar Linier</option>
					<option value="15">Penambangan Data</option>
					<option value="16">Pemrograman Dekstop</option>
					<option value="17">Rekayasa Multemdia</option>
					<option value="18">Sistem Operasi</option>
					<option value="19">Matematika Diskrit</option>
					<option value="20">Sistem Basis Data</option>
					<option value="21">Pemrograman Berorientasi Objek</option>
					<option value="22">Komputasi Numerik</option>
					<option value="23">Pengolahan Basis Data</option>
					<option value="24">Sistem Informasi</option>
					<option value="25">Grafika Komputer</option>
					<option value="26">Jaringan Komputer</option>
					<option value="27">Bahasa Formal dan Automata</option>

				</select>
			</td>
		</tr>
	</table>
		<div class="box4">Logout?</div>
		<table class="table2">
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr><td><br></td><td></td></tr>
		<tr>
		<td><a href="logout.php" class="buttonLogout2">Yes</a></td>
		<td><a href="index.php" class="buttonLogout2">No</a></td>
		</tr>
		</table>
		<a href="index.php" class="buttonHome">Home</a>
		<a href="private1.php" class="buttonDetail1">Detail 1</a>
		
	</form>
</body>
</html>