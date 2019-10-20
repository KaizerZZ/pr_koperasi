<?php 
	require_once 'app/models/models.php';
	require_once 'app/controller/addAnggota.php'; 
	$get = new models;
	$dataAnggota = array(
		'id_anggota',
		'nama_anggota',
		'alamat',
		'tgl_lahir',
		'tmpt_lahir',
		'no_telp'
	);
	$get->selectAll('tb_anggota',$dataAnggota);
	if (isset($_POST['add_anggota'])) {
		$tambahAnggota = new addAnggota;
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<!-- masih dicoba -->

<h3>Tambah tb_anggota</h3>
<hr>
<form action="" method="post">
	<label for="">Nama</label><br>
	<input type="text" name="nama"><br>
	<label for="">Alamat</label><br>
	<input type="text" name="alamat"><br>
	<label for="">Tanggal Lahir</label><br>
	<input type="date" name="tgl_lahir"><br>
	<label for="">Tempat Lahir</label><br>
	<input type="text" name="tmpt_lahir"><br>
	<label for="">No. Telp</label><br>
	<input type="number" name="no_telp"><br>
	<button type="submit" name="add_anggota">Tambah</button><br>
</form>

<hr>

<!-- <h3>Tambah tb_petugas</h3>
<hr>
<form action="controller/add_petugas.php" method="post">
	<label for="">Nama</label><br>
	<input type="text" name="nama"><br>
	<label for="">Password</label><br>
	<input type="text" name="password"><br>
	<label for="">Alamat</label><br>
	<input type="text"><br>
	<label for="">Tanggal Lahir</label><br>
	<input type="datetime"><br>
	<label for="">Tempat Lahir</label><br>
	<input type="text"><br>
	<label for="">No. Telp</label><br>
	<input type="number"><br>
	<button type="submit" name="add_petugas">Tambah</button><br>
</form>

<hr> -->
<?php 
	
?>
</body>
</html>