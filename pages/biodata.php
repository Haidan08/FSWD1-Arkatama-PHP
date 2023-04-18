<!DOCTYPE html>
<html>
<head>
	<title>Tugas 16</title>
    <link rel="stylesheet" href="../assets/css/style biodata.css">
</head>
<body>
	<?php
		// BIODATA
		$nama = 'Haidan Ahsan';
		$tempat_lahir = 'Garut';
		$tanggal_lahir = '8 Maret 2002';
		$jenis_kelamin = 'Laki - Laki';
		$alamat = 'Perum Bumi Cempaka Indah Blok 7 No 85';
		$foto = '../assets/image/haidan.jpg';
		$pendidikan = 'S1 Pendidikan Sejarah - Universitas Pendidikan Indonesia';
		$hobi = 'Main Game, Nonton Film, Basket, Baca Komik';

		// TAMPILKAN BIODATA
		echo '<h1>BIODATA</h1>';
		echo '<div class="container">';
        echo '<div class="photo"><img src="' . $foto . '" alt="Foto"></div>';
		echo '<div class="row"><span class="label">Nama         :</span> <span class="value">' . $nama . '</span></div>';
		echo '<div class="row"><span class="label">Tempat/Tanggal Lahir:</span> <span class="value">' . $tempat_lahir . ', ' . $tanggal_lahir . '</span></div>';
		echo '<div class="row"><span class="label">Jenis Kelamin:</span> <span class="value">' . $jenis_kelamin . '</span></div>';
		echo '<div class="row"><span class="label">Alamat       :</span> <span class="value">' . $alamat . '</span></div>';    
		echo '<div class="row"><span class="label">Pendidikan   :</span> <span class="value">' . $pendidikan . '</span></div>';
		echo '<div class="row"><span class="label">Hoby         :</span> <span class="value">' . $hobi . '</span></div>';
		echo '</div>';
	?>
</body>
</html>