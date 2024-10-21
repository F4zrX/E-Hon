<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM modul WHERE id_modul='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }
?>

<div class="card card-success">
	<div class="card-header">
		<h3 class="card-title">
			<i class="fa fa-edit"></i> Ubah Data</h3>
	</div>
	<form action="" method="post" enctype="multipart/form-data">
		<div class="card-body">

			<input type='hidden' class="form-control" name="id_modul" value="<?php echo $data_cek['id_modul']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Judul</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="judul" name="judul" value="<?php echo $data_cek['jdl_modul']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Overview</label>
				<div class="col-sm-5">
					<textarea class="form-control" id="overview" name="overview"><?php echo $data_cek['overview_modul']; ?></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Penulis</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="penulis" name="penulis" value="<?php echo $data_cek['penulis_modul']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Harga</label>
				<label>Rp.</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="harga" name="harga" onkeypress="return numberOnly(event)" value="<?php echo $data_cek['harga_modul']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Stok</label>
				<div class="col-sm-5">
					<input type="text" class="form-control" id="stok" name="stok" onkeypress="return numberOnly(event)" value="<?php echo $data_cek['stok']; ?>">
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Kategori</label>
				<div class="col-sm-4">
					<select name="kategori" id="kategori" class="form-control">
						<option value="">-- Pilih --</option>
						<?php
                //cek data yg dipilih sebelumnya
                if ($data_cek['kategori'] == "Programming") echo "<option value='Programming' selected>Programming</option>";
                else echo "<option value='Programming'>Programming</option>";

                if ($data_cek['kategori'] == "2D Animation") echo "<option value='2D Animation' selected>2D Animation</option>";
                else echo "<option value='2D Animation'>2D Animation</option>";

                if ($data_cek['kategori'] == "3D Animation") echo "<option value='3D Animation' selected>3D Animation</option>";
                else echo "<option value='3D Animation'>3D Animation</option>";

                if ($data_cek['kategori'] == "Mobile") echo "<option value='Mobile' selected>Mobile</option>";
                else echo "<option value='Mobile'>Mobile</option>";

                if ($data_cek['kategori'] == "Web") echo "<option value='Web' selected>Web</option>";
                else echo "<option value='Web'>Web</option>";

                if ($data_cek['kategori'] == "Graphic") echo "<option value='Graphic' selected>Graphic</option>";
                else echo "<option value='Graphic'>Graphic</option>";
            			?>
					</select>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Cover Modul</label>
				<div class="col-sm-6">
					<img src="cover/<?php echo $data_cek['cover_modul']; ?>" width="160px" />
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Ubah cover</label>
				<div class="col-sm-6">
					<input type="file" id="cover" name="cover">
					<p class="help-block">
						<font color="red">"Format file Jpg/Png"</font>
					</p>
				</div>
			</div>
		</div>

		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
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

	
if (isset ($_POST['Ubah'])){

    if(!empty($sumber)){
        $cover= $data_cek['cover_modul'];
            if (file_exists("cover/$cover")){
            unlink("cover/$cover");}

        $sql_ubah = "UPDATE modul SET
			jdl_modul='".$_POST['judul']."',
			overview_modul='".$_POST['overview']."',
			penulis_modul='".$_POST['penulis']."',
			harga_modul='".$_POST['harga']."',
			cover_modul='".$nama_file."',
			kategori='".$_POST['kategori']."',
			stok='".$_POST['stok']."'
            WHERE id_modul='".$_POST['id_modul']."'";
        $query_ubah = mysqli_query($koneksi, $sql_ubah);

    }elseif(empty($sumber)){
    	$sql_ubah = "UPDATE modul SET
			jdl_modul='".$_POST['judul']."',
			overview_modul='".$_POST['overview']."',
			penulis_modul='".$_POST['penulis']."',
			harga_modul='".$_POST['harga']."',
			kategori='".$_POST['kategori']."',
			stok='".$_POST['stok']."'
            WHERE id_modul='".$_POST['id_modul']."'";
		$query_ubah = mysqli_query($koneksi, $sql_ubah);
        }

    if ($query_ubah) {
        echo "<script>
        Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-modul';
            }
        })</script>";
        }else{
        echo "<script>
        Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
                window.location = 'index.php?page=data-modul';
            }
        })</script>";
    }
}

