<div class="card card-info">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-table"></i> Data Modul</h3>
	</div>
	<!-- /.card-header -->
	<div class="card-body">
		<div class="table-responsive">
			<div>
				<a href="?page=add-modul" class="btn btn-primary">
					<i class="fa fa-edit"></i> Tambah Data</a>
			</div>
			<br>
			<table id="example1" class="table table-bordered table-striped">
				<thead>
					<tr>
						<th>No</th>
						<th>Cover</th>
						<th>Judul</th>
						<th>Penulis</th>
						<th>Kategori</th>
						<th>Harga</th>
						<th>Stok</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>

					<?php
              $no = 1;
              $sql = $koneksi->query("select * from modul");
              while ($data= $sql->fetch_assoc()) {
            ?>

            <tr>
						<td style="width: 5%;" align="center">
							<?php echo $no++; ?>
						</td>
						<td align="center">
							<img src="cover/<?php echo $data['cover_modul']; ?>" width="70px" />
						</td>
						<td style="width:20%;">
							<?php echo substr($data['jdl_modul'], 0,40); ?>...
						</td>
						<td style="width:20%;">
							<?php echo $data['penulis_modul']; ?>
						</td>
						<td>
							<?php echo $data['kategori']; ?>
						</td>
						<td>
							Rp.<?php echo $data['harga_modul']; ?>
						</td>
						<td align="center">
							<?php echo $data['stok']; ?>
						</td>

						<td>
							<a href="?page=view-modul&kode=<?php echo $data['id_modul']; ?>" title="Detail"
							 class="btn btn-info btn-sm"> 
								<i class="fa fa-eye"></i>
							</a>
							</a>
							<a href="?page=edit-modul&kode=<?php echo $data['id_modul']; ?>" title="Ubah" class="btn btn-success btn-sm">
								<i class="fa fa-edit"></i>
							</a>
							<a href="?page=del-modul&kode=<?php echo $data['id_modul']; ?>" onclick="return confirm('Apakah anda yakin hapus data ini ?')"
							 title="Hapus" class="btn btn-danger btn-sm">
								<i class="fa fa-trash"></i>
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