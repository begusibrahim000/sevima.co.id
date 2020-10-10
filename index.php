<?php
	// TES FULL-STACK WEB DEVELOPER - sevima.co.id

	/* 	
		9 - oktober - 2020 / 19:33
		Begus Ibrahim
		A Full-Stack Web Developer | https://sribulancer.com/id/users/myjobs12345 
	*/

    // koneksi 
    $hostname = 'localhost';
	$username = 'root';
	$password = '';
	$database = 'sevima.co.id';

	$koneksi = new mysqli($hostname,$username,$password,$database);

	if(!$koneksi) {
		echo "<script>alert('Koneksi Gagal');</script>";
    }
    
	// proses query
	$id_1 = 1;
	$id_2 = 2;
	$id_3 = 3;
	$id_4 = 4;
	$id_5 = 5;
	$table1 = mysqli_query($koneksi, "SELECT * FROM identitas INNER JOIN nilai ON identitas.id = nilai.id WHERE identitas.id = '$id_1'");
	$pecah_data_table1 = mysqli_fetch_assoc($table1);

	$table2 = mysqli_query($koneksi, "SELECT * FROM identitas WHERE id = '$id_2'");
	$pecah_data_table2 = mysqli_fetch_assoc($table2);
	
	$table_nilai_id_2 = mysqli_query($koneksi, "SELECT * FROM nilai WHERE id = '$id_2'");
	$pecah_table_nilai_id_2 = mysqli_fetch_assoc($table_nilai_id_2);
	
	$table_nilai_id_3 = mysqli_query($koneksi, "SELECT * FROM nilai WHERE id = '$id_3'");
	$pecah_table_nilai_id_3 = mysqli_fetch_assoc($table_nilai_id_3);
	
	$table_nilai_id_4 = mysqli_query($koneksi, "SELECT * FROM nilai WHERE id = '$id_4'");
	$pecah_table_nilai_id_4 = mysqli_fetch_assoc($table_nilai_id_4);
	
	$table_nilai_id_5 = mysqli_query($koneksi, "SELECT * FROM nilai WHERE id = '$id_5'");
	$pecah_table_nilai_id_5 = mysqli_fetch_assoc($table_nilai_id_5);

	// aktifkan kode di bawah untuk melihat data

	// echo "<pre>";
	// print_r($pecah_data_table1);
	// print_r($pecah_table_nilai_id_2);
	// print_r($pecah_table_nilai_id_3);
	// print_r($pecah_table_nilai_id_4);
	// print_r($pecah_table_nilai_id_5);
	// print_r($pecah_data_table2);
	// echo "</pre>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sevima.co.id</title>
</head>
<body>

	<h1>Tes Back-End Developer - sevima.co.i.d</h1>
    <hr>
    <h2>Table 1</h2>
	<table border="1">
		<thead>
			<tr>
				<th>Nim</th>
				<th>Nama</th>
				<th>Nilai Tertinggi</th>
				<th>Nilai Terendah</th>
				<th>Nilai Rata - rata</th>
				<th>Jumlah Matakuliah</th>
				<th>Mata Kuliah dengan Nilai Tertinggi</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= $pecah_data_table1['nim']; ?></td>
				<td><?= $pecah_data_table1['nama']; ?></td>
				<td><?= $pecah_data_table1['nilai_angka']; ?></td>
				<td><?= $pecah_table_nilai_id_2['nilai_angka'];?></td>
				<td><?= ($pecah_data_table1['nilai_angka'] + $pecah_table_nilai_id_2['nilai_angka'] + $pecah_table_nilai_id_3['nilai_angka']) / 3 ?></td>
				<td><?= $pecah_data_table1['nim'] == '10001' && $pecah_table_nilai_id_2['nim'] == '10001' && $pecah_table_nilai_id_3['nim'] == '10001' ? 3 : 0; ?></td>
				<td><?= $pecah_data_table1['nama_mk']; ?></td>
			</tr>
			<tr>
				<td><?= $pecah_data_table2['nim']; ?></td>
				<td><?= $pecah_data_table2['nama']; ?></td>
				<td><?= $pecah_table_nilai_id_4['nilai_angka']; ?></td>
				<td><?= $pecah_table_nilai_id_5['nilai_angka'];?></td>
				<td><?= ($pecah_table_nilai_id_4['nilai_angka'] + $pecah_table_nilai_id_5['nilai_angka'])  / 2 ?></td>
				<td><?= $pecah_table_nilai_id_4['nim'] == '10002' && $pecah_table_nilai_id_5['nim'] == '10002' ? 2 : 0; ?></td>
				<td><?= $pecah_table_nilai_id_4['nama_mk']; ?></td>
			</tr>
		</tbody>
	</table>

	<hr>
    <h2>Table 2</h2>
	<table border="1">
		<thead>
			<tr>
				<th>Kode MK</th>
				<th>Nama MK</th>
				<th>Jumlah Mahasiswa Yang Mendapat Nilai A atau B</th>
				<th>Nilai Rata - rata Pada  Mahasiswa yang berumur Lebih dari 20 dan Kurang dari 22</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td><?= $pecah_data_table1['kode_mk']; ?></td>
				<td><?= $pecah_data_table1['nama_mk']; ?></td>
				<td><?= $pecah_data_table1['kode_mk'] == 'MKA' && $pecah_table_nilai_id_5['kode_mk'] == 'MKA' ? 2 : 0; ?></td>
				<td><?= ($pecah_data_table1['nilai_angka'] + $pecah_table_nilai_id_5['nilai_angka']) / 2; ?></td>
			</tr>
			<tr>
				<td><?= $pecah_table_nilai_id_3['kode_mk']; ?></td>
				<td><?= $pecah_table_nilai_id_3['nama_mk']; ?></td>
				<td><?= $pecah_table_nilai_id_3['kode_mk'] == 'MKC' ? 1 : 0; ?></td>
				<td><?= $pecah_table_nilai_id_3['nilai_angka']; ?></td>
			</tr>
		</tbody>
	</table>

</body>
</html>