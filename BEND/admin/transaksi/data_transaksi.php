<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Transaksi</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Nama Pembeli</th>
						<th>E-Mail</th>
						<th>Nama Modul</th>
						<th>Harga</th>
						<th>Status</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
              $sql = $koneksi->query("select * from transaksi");
              while ($data= $sql->fetch_assoc()) {
            ?>

					<tr>
						<td style="text-align: center;">
							<?php echo $no++; ?>
						</td>
						<td>
							<?php echo $data['nama_pembeli']; ?>
						</td>
						<td>
							<?php echo $data['email']; ?>
						</td>
						<td>
							<?php echo $data['jdl_modul']; ?>
						</td>
						<td>
							Rp.<?php echo $data['harga']; ?>
						</td>

						<td style="text-align: center">
							<?php  
							if ($data['status'] == 'Proses') {
								?><a href="?page=detail-transaksi&kode=<?php echo $data['no_transaksi']; ?>" title="Proses"class="btn btn-warning btn-sm"><?php echo $data['status']; ?></a><?php
							}elseif($data['status'] == 'Diterima'){
								?><a href="?page=detail-transaksi&kode=<?php echo $data['no_transaksi']; ?>" title="Diterima"class="btn btn-success btn-sm"><?php echo $data['status']; ?></a><?php
							}elseif($data['status'] == 'Ditolak'){
								?><a href="?page=detail-transaksi&kode=<?php echo $data['no_transaksi']; ?>" title="Ditolak"class="btn btn-danger btn-sm"><?php echo $data['status']; ?></a>
							<?php }
							
							?>
						</td>
					</tr>

					<?php
              }
            ?>
				</tbody>
				</tfoot>
			</table>
		</div>
	</div>
	<!-- /.card-body -->