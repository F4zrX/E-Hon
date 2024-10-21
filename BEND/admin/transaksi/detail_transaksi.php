<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from transaksi WHERE no_transaksi='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>
<div class="row">
	<div class="col-md-8">
		<div class="card card-info">
			<div class="card-header">
				<h3 class="card-title">Detail Transaksi</h3>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body p-0">
				<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<input type='hidden' class="form-control" id="notransaksi" name="notransaksi" value="<?php echo $data_cek['no_transaksi']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Pembeli</label>
				<div class="col-sm-8">
					<input type="text" readonly class="form-control" id="nama" name="nama" value="<?php echo $data_cek['nama_pembeli']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-8">
					<input type="text" readonly class="form-control" id="alamat" name="alamat" value="<?php echo $data_cek['alamat']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">E-Mail</label>
				<div class="col-sm-8">
					<input type="text" readonly class="form-control" id="email" name="email" value="<?php echo $data_cek['email']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor HP</label>
				<div class="col-sm-8">
					<input type="text" readonly class="form-control" id="bidang" name="bidang" value="<?php echo $data_cek['no_hp']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Modul Yang Dibeli</label>
				<div class="col-sm-8">
					<input type="text" readonly class="form-control" id="bidang" name="bidang" value="<?php echo $data_cek['jdl_modul']; ?>"
					/>
				</div>
			</div>
			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Harga Modul</label>
				<label>Rp.</label>
				<div class="col-sm-8">
					<input type="text" readonly class="form-control" id="bidang" name="bidang" value="<?php echo $data_cek['harga']; ?>"
					/>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Konfirmasi" value="Diterima" class="btn btn-success">
			<input type="submit" name="Tolak" value="Ditolak" class="btn btn-danger">
		</div>
	</form>
			</div>
		</div>
	</div>

	<div class="col-md-4">
		<div class="card card-info">
			<div class="card-header">
				<center>
					<h3 class="card-title">
						Bukti Pembayaran
					</h3>
				</center>

				<div class="card-tools">
				</div>
			</div>
			<div class="card-body">
				<div class="text-center">
					<img src="paymentproof/<?php echo $data_cek['paymentproof']; ?>" width="280px" />
				</div>
			</div>
		</div>
	</div>

</div>
<?php

    if (isset ($_POST['Konfirmasi'])){
	    $sql_ubah = "UPDATE transaksi SET 
	    status='".$_POST['Konfirmasi']."' 
	    WHERE no_transaksi='".$_POST['notransaksi']."'";
	    $query_ubah = mysqli_query($koneksi, $sql_ubah);
	    mysqli_close($koneksi);

	    if ($query_ubah) {
	        echo "<script>
	      Swal.fire({title: 'Data Terkonfirmasi',text: '',icon: 'success',confirmButtonText: 'OK'
	      }).then((result) => {if (result.value)
	        {window.location = 'index.php?page=data-transaksi';
	        }
	      })</script>";
	      }else{
	      echo "<script>
	      Swal.fire({title: 'Konfirmasi Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
	      }).then((result) => {if (result.value)
	        {window.location = 'index.php?page=data-transaksi';
	        }
	      })</script>";
	  	}
    }elseif (isset ($_POST['Tolak'])){
    	$sql_ubah = "UPDATE transaksi SET 
	    status='".$_POST['Tolak']."' 
	    WHERE no_transaksi='".$_POST['notransaksi']."'";
	    $query_ubah = mysqli_query($koneksi, $sql_ubah);
	    mysqli_close($koneksi);

	    if ($query_ubah) {
	        echo "<script>
	      Swal.fire({title: 'Data Ditolak',text: '',icon: 'success',confirmButtonText: 'OK'
	      }).then((result) => {if (result.value)
	        {window.location = 'index.php?page=data-transaksi';
	        }
	      })</script>";
	      }else{
	      echo "<script>
	      Swal.fire({title: 'Penolakan Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
	      }).then((result) => {if (result.value)
	        {window.location = 'index.php?page=data-transaksi';
	        }
	      })</script>";
   		}
   	}
   ?>