<?php
	include "../inc/koneksi.php";
	
	$id_modul = $_GET['id_modul'];

	$sql_cek = "SELECT * FROM modul";
	$query_cek = mysqli_query($koneksi, $sql_cek);
	$data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
	{
?>


<!DOCTYPE html>
<html lang="en">

<head>
	<title>CETAK E-HON</title>
</head>

<body>
	<center>

		<h2>
			CETAK E-HON
		</h2>
			<?php
			}

			$sql_tampil = "select * from modul where id_modul='$id_modul'";
			$query_tampil = mysqli_query($koneksi, $sql_tampil);
			$no=1;
			while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
		?>
	</center>

	<center>
		<h4>
			<u>DATA E-HON</u>
		</h4>
	</center>

	<table border="1" cellspacing="0" align="center">
		<tbody>
			<tr>
				<td rowspan="7" align="left">
					<img src="../cover/<?php echo $data['cover_modul']; ?>" width="280px"/>
				</td>
			</tr>
			<div style="width: 100px;">
			<tr>
				<td>JUDUL MODUL</td>
				<td>:</td>
				<td>
					<?php echo $data['jdl_modul']; ?>
				</td>
			</tr>
			<tr>
				<td>Penulis</td>
				<td> :</td>
				<td>
					<?php echo $data['penulis_modul']; ?>
				</td>
			</tr>
			<tr>
				<td>Overview</td>
				<td> :</td>
				<td>
					<?php echo $data['overview_modul']; ?>
				</td>
			</tr>
			<tr>
				<td>Harga Modul</td>
				<td> :</td>
				<td>
					Rp.<?php echo $data['harga_modul']; ?>
				</td>
			</tr>
			<tr>
				<td>Kategori</td>
				<td> :</td>
				<td>
					<?php echo $data['kategori']; ?>
				</td>
			</tr>
			</div>
			<?php } ?>
		</tbody>
	</table>


	<script>
		window.print();
	</script>

</body>

</html>