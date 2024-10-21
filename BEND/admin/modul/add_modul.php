<div class="card card-primary">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Tambah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Judul</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="judul" name="judul" placeholder="Judul Modul" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Overview</label>
				<div class="col-sm-5">
					<textarea class="form-control" id="overview" name="overview" placeholder="Overview Modul" required rows="3"></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penulis</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="penulis" name="penulis" placeholder="Nama Penulis" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Harga</label>
				<label>Rp.</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="harga" name="harga" placeholder="Harga Modul" onkeypress="return numberOnly(event)" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Stok</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="stok" name="stok" placeholder="Jumlah Stok" onkeypress="return numberOnly(event)" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori</label>
				<div class="col-sm-5">
					<select name="kategori" id="kategori" class="form-control">
						<option>- Pilih -</option>
						<option>Programming</option>
						<option>2D Animation</option>
						<option>3D Animation</option>
						<option>Mobile</option>
						<option>Web</option>
						<option>Graphic</option>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Cover Buku</label>
				<div class="col-sm-6">
					<input type="file" id="cover" name="cover">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
			<a href="?page=data-modul" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>

<script type="text/javascript">
	function	numberOnly(e){
		var x = e.which || e.keycode;
		if (x >= 48 && x <= 57) {
			return true;
		}else{
			return false;
		}
	}
</script>

<?php
	$sumber = @$_FILES['cover']['tmp_name'];
	$target = 'cover/';
	$nama_file = @$_FILES['cover']['name'];
	$pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

		if(!empty($sumber)){
        $sql_simpan = "INSERT INTO modul (jdl_modul, overview_modul, penulis_modul, harga_modul, kategori, stok, cover_modul) VALUES (
				'".$_POST['judul']."',
				'".$_POST['overview']."',
				'".$_POST['penulis']."',
				'".$_POST['harga']."',
				'".$_POST['kategori']."',
				'".$_POST['stok']."',
        '".$nama_file."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Tambah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=data-modul';
          }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Tambah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.php?page=add-modul';
          }
      })</script>";
	}
	}elseif(empty($sumber)){
		echo "<script>
		Swal.fire({title: 'Gagal, Cover Wajib Diisi',text: '',icon: 'error',confirmButtonText: 'OK'
		}).then((result) => {
			if (result.value) {
				window.location = 'index.php?page=add-modul';
			}
		})</script>";
	}
	}
     //selesai proses simpan data
