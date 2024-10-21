<?php

    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * FROM staff WHERE id_staff='".$_GET['kode']."'";
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

			<input type='hidden' class="form-control" name="id_staff" value="<?php echo $data_cek['id_staff']; ?>"
			 readonly/>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nama Staff</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="nama_staff" name="nama_staff" value="<?php echo $data_cek['nama_staff']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Alamat</label>
				<div class="col-sm-5">
					<textarea class="form-control" id="alamat" name="alamat" placeholder="Alamat Staff" required rows="3"><?php echo $data_cek['alamat']; ?></textarea>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Nomor Hp</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="no_hp" name="no_hp" maxlength="12" placeholder="Contoh : 085788223344" onkeypress="return numberOnly(event)" value="<?php echo $data_cek['no_hp']; ?>" required>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Username</label>
				<div class="col-sm-6">
					<input type="text" class="form-control" id="username" name="username" value="<?php echo $data_cek['username']; ?>"
					/>
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Password</label>
				<div class="col-sm-6">
					<input type="password" class="form-control" id="pass" name="password" value="<?php echo $data_cek['password']; ?>"
					/>
					<input id="mybutton" onclick="change()" type="checkbox" class="form-checkbox"> Lihat Password
				</div>
			</div>

			<div class="form-group row">
				<label class="col-sm-2 col-form-label">Jabatan</label>
				<div class="col-sm-4">
					<select name="jabatan" id="jabatan" class="form-control">
						<option value="">-- Pilih Level --</option>
						<?php
                //menhecek data yg dipilih sebelumnya
                if ($data_cek['jabatan'] == "Administrator") echo "<option value='Administrator' selected>Administrator</option>";
                else echo "<option value='Administrator'>Administrator</option>";

                if ($data_cek['jabatan'] == "Sekretaris") echo "<option value='Sekretaris' selected>Sekretaris</option>";
                else echo "<option value='Sekretaris'>Sekretaris</option>";
            ?>
					</select>
				</div>
			</div>

		</div>
		<div class="card-footer">
			<input type="submit" name="Ubah" value="Simpan" class="btn btn-success">
			<a href="?page=data-staff" title="Kembali" class="btn btn-secondary">Batal</a>
		</div>
	</form>
</div>



<?php

    if (isset ($_POST['Ubah'])){
    $sql_ubah = "UPDATE staff SET
        nama_staff='".$_POST['nama_staff']."',
        alamat='".$_POST['alamat']."',
        no_hp='".$_POST['no_hp']."',
        username='".$_POST['username']."',
        password='".$_POST['password']."',
        jabatan='".$_POST['jabatan']."'
        WHERE id_staff='".$_POST['id_staff']."'";
    $query_ubah = mysqli_query($koneksi, $sql_ubah);
    mysqli_close($koneksi);

    if ($query_ubah) {
        echo "<script>
      Swal.fire({title: 'Ubah Data Berhasil',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-staff';
        }
      })</script>";
      }else{
      echo "<script>
      Swal.fire({title: 'Ubah Data Gagal',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value)
        {window.location = 'index.php?page=data-staff';
        }
      })</script>";
    }}
?>
<script type="text/javascript">
    function change(){
    	var x = document.getElementById('pass').type;

	    if (x == 'password'){
	        document.getElementById('pass').type = 'text';
	        document.getElementById('mybutton').innerHTML;
	    }else{
	        document.getElementById('pass').type = 'password';
	        document.getElementById('mybutton').innerHTML;
	    }
    }

    function	numberOnly(e){
		var x = e.which || e.keycode;
		if (x >= 48 && x <= 57) {
			return true;
		}else{
			return false;
		}
	}
</script>