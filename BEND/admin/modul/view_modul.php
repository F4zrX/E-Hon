<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from modul WHERE id_modul='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">

	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Modul</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<table class="table">
					<tbody>
						<tr>
							<td style="width: 150px">
								<b>Judul</b>
							</td>
							<td>:
								<?php echo $data_cek['jdl_modul']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Penulis</b>
							</td>
							<td>:
								<?php echo $data_cek['penulis_modul']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Overview Modul</b>
							</td>
							<td>:
								<?php echo $data_cek['overview_modul']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Kategori</b>
							</td>
							<td>:
								<?php echo $data_cek['kategori']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Stok</b>
							</td>
							<td>:
								<?php echo $data_cek['stok']; ?>
							</td>
						</tr>
						<tr>
							<td style="width: 150px">
								<b>Harga</b>
							</td>
							<td>: 
								Rp. <?php echo $data_cek['harga_modul']; ?></p>
							</td>
						</tr>
					</tbody>
				</table>
				<div class="card-footer">
					<a href="?page=data-modul" class="btn btn-warning">Kembali</a>

					<!--<a href="./report/cetak-modul.php?id_modul=<?php/* echo $data_cek['id_modul']; */ ?>" target=" _blank"
					 title="Cetak Data Modul" class="btn btn-primary">Print</a> -->
				</div>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-success">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Cover Buku
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="cover/<?php echo $data_cek['cover_modul']; ?>" width="280px" />
				</div>

				<h3 class="profile-username text-center">
					<?php echo $data_cek['jdl_modul']; ?>
				</h3>
			</div>
		</div>
	</div>

</div>