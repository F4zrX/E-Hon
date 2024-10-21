<?php
    include "assets/php/koneksi.php";
    if(isset($_GET['kode'])){
        $sql_cek = "SELECT * from modul WHERE id_modul='".$_GET['kode']."'";
        $query_cek = mysqli_query($koneksi, $sql_cek);
        $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    }

?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">
    <script src="assets/js/alert.js"></script>

    <title>E-hon</title>
    <link rel="icon" href="assets/dist/img/elogo.png">

    <!-- Additional CSS Files -->
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.css">

    <link rel="stylesheet" href="assets/css/templatemo-hexashop.css">

    <link rel="stylesheet" href="assets/css/owl-carousel.css">

    <link rel="stylesheet" href="assets/css/lightbox.css">
<!--

TemplateMo 571 Hexashop

https://templatemo.com/tm-571-hexashop

-->
    </head>
    
    <body>
    
    <!-- ***** Preloader Start ***** -->
    <div id="preloader">
        <div class="jumper">
            <div></div>
            <div></div>
            <div></div>
        </div>
    </div>  
    <!-- ***** Preloader End ***** -->
    
    
    <!-- ***** Header Area Start ***** -->
    <header class="header-area header-sticky">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <nav class="main-nav">
                        <!-- ***** Logo Start ***** -->
                        <a href="index.html" class="logo">
                            <img src="assets/images/E-Hon.png">
                        </a>
                        <!-- ***** Logo End ***** -->
                        <!-- ***** Menu Start ***** -->
                        <ul class="nav">
                            <li class="scroll-to-section"><a href="index.html" class="active">Home</a></li>
                            <li class=""><a href="gallery.php">Gallery</a></li>
                            <li class="submenu">
                                <a href="javascript:;">More</a>
                                <ul>
                                    <li><a href="about.html">About Us</a></li>
                                    <li class="scroll-to-section"><a href="#footer">Contact Us</a></li>
                                </ul>
                            </li>
                            <li class="submenu">
                                <a href="javascript:;">Categories</a>
                                <ul>
                                    <li><a href="2D Animation.html">2D Animation</a></li>
                                    <li><a href="3D Animation.html">3D Animation</a></li>
                                    <li><a href="Programming.html">Programming</a></li>
                                    <li><a href="Mobile Programming.html">Mobile</a></li>
                                    <li><a href="WEB DEVELOPMENT.html">Web</a></li>
                                    <li><a href="Design.html">Design</a></li>
                                </ul>
                            </li>
                        </ul>        
                        <a class='menu-trigger'>
                            <span>Menu</span>
                        </a>
                        <!-- ***** Menu End ***** -->
                    </nav>
                </div>
            </div>
        </div>
    </header>
    <!-- ***** Header Area End ***** -->

    <!-- ***** Main Banner Area Start ***** -->

    <div style="margin-top: 10%;" class="card card-success">
    <div class="card-header">
        <h3 class="card-title">
            <i class="fa fa-clipboard"></i> Transaction</h3>
    </div>
    <form action="" method="post" enctype="multipart/form-data">
        <div style="float: right; margin: 2%;" class="col-md-4">
        <div class="card card-success">
            <div class="card-body">
                <div class="text-center">
                    <img src="assets/cover/<?php echo $data_cek['cover_modul']; ?>" width="280px" />
                </div>
            </div>
        </div>
        </div>
        <div class="card-body">

            <input type='hidden' class="form-control" name="id_modul" id="id_modul" value="<?php echo $data_cek['id_modul']; ?>"
             readonly/>

             <div class="form-group row">
                <label class="col-sm-2 col-form-label">Name</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" placeholder="Your Name" id="nama" name="nama" required />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">E-mail</label>
                <div class="col-sm-5">
                    <input type="email" class="form-control" placeholder="yourmail@mail.com" id="email" name="email" required />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Address</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="alamat" placeholder="Your Address" name="alamat" required />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Phone Number</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nohp" name="nohp" placeholder="Ex : 085788223344" maxlength="12" onkeypress="return numberOnly(event)" required />
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Title</label>
                <div class="col-sm-5">
                    <textarea style="height: 150px" readonly class="form-control" id="judul" name="judul"><?php echo $data_cek['jdl_modul']; ?></textarea>
                </div>
            </div>


            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Price</label>
                <label>Rp.</label>
                <div class="col-sm-5">
                    <input readonly type="text" class="form-control" id="harga" name="harga" onkeypress="return numberOnly(event)" value="<?php echo $data_cek['harga_modul']; ?>">
                </div>
            </div>

            <div class="form-group row">
                <label class="col-sm-2 col-form-label">Proof of Payment</label>
                <div class="col-sm-6">
                    <input type="file" id="paymentproof" name="paymentproof">
                    <p class="help-block">
                        <font color="red">"File format Jpg/Png"</font>
                    </p>
                </div>
            </div>

        <div class="card-footer">
            <input type="submit" name="Simpan" value="Simpan" class="btn btn-info">
            <a href="index.html" title="Kembali" class="btn btn-secondary">Cancel</a>
        </div>
    </form>

</div>
    <!-- ***** Main Banner Area End ***** -->


    <!-- ***** Product Area Starts ***** -->

    <!-- ***** Product Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <section class="section" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">Fakultas Teknik Universitas Muhammadiyah Jakarta, Gedung C Lt. 1, Jl. Cempaka Putih Tengah 27, RT.11/RW.5, Cemp. Putih Tim., Kec. Cemp. Putih, Kota Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510</a></li>
                            <li><a href="#">EHone@gmail.com</a></li>
                            <li><a href="#">0895-3785-43125</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Categories</h4>
                    <ul>
                        <li><a href="#">2D Animation</a></li>
                        <li><a href="#">3D Animation</a></li>
                        <li><a href="#">Programming</a></li>
                        <li><a href="#">Mobile Programming</a></li>
                        <li><a href="#">Web development</a></li>
                        <li><a href="#">Design</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Useful Links</h4>
                    <ul>
                        <li><a href="#">Homepage</a></li>
                        <li><a href="#">About Us</a></li>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">Contact Us</a></li>
                    </ul>
                </div>
                <div class="col-lg-3">
                    <h4>Help &amp; Information</h4>
                    <ul>
                        <li><a href="#">Help</a></li>
                        <li><a href="#">FAQ's</a></li>
                        <li><a href="#">Shipping</a></li>
                        <li><a href="#">Tracking ID</a></li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="under-footer">
                        <p>Copyright © 2022 E-Hon , Universitas Muhammadiyah Jakarta.</p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    <script src="assets/js/quantity.js"></script>
    


    <script>

        $(function() {
            var selectedClass = "";
            $("p").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#portfolio").fadeTo(50, 0.1);
                $("#portfolio div").not("."+selectedClass).fadeOut();
            setTimeout(function() {
              $("."+selectedClass).fadeIn();
              $("#portfolio").fadeTo(50, 1);
            }, 500);
                
            });
        });

    </script>

  </body>

  <!-- jQuery -->
    <script src="assets/js/jquery-2.1.0.min.js"></script>

    <!-- Bootstrap -->
    <script src="assets/js/popper.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>

    <!-- Plugins -->
    <script src="assets/js/owl-carousel.js"></script>
    <script src="assets/js/accordions.js"></script>
    <script src="assets/js/datepicker.js"></script>
    <script src="assets/js/scrollreveal.min.js"></script>
    <script src="assets/js/waypoints.min.js"></script>
    <script src="assets/js/jquery.counterup.min.js"></script>
    <script src="assets/js/imgfix.min.js"></script> 
    <script src="assets/js/slick.js"></script> 
    <script src="assets/js/lightbox.js"></script> 
    <script src="assets/js/isotope.js"></script> 
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>


    <script>
        $(function() {
            $("#example1").DataTable();
            $('#example2').DataTable({
                "paging": true,
                "lengthChange": false,
                "searching": false,
                "ordering": true,
                "info": true,
                "autoWidth": false,
            });
        });
    </script>

    <script>
        $(function() {
            //Initialize Select2 Elements
            $('.select2').select2()

            //Initialize Select2 Elements
            $('.select2bs4').select2({
                theme: 'bootstrap4'
            })
        })
    </script>

</html>
<script type="text/javascript">
    function    numberOnly(e){
        var x = e.which || e.keycode;
        if (x >= 48 && x <= 57) {
            return true;
        }else{
            return false;
        }
    }
</script>

<?php
    $sumber = @$_FILES['paymentproof']['tmp_name'];
    $target = '../BEND/paymentproof';
    $nama_file = @$_FILES['paymentproof']['name'];
    $pindah = move_uploaded_file($sumber, $target.$nama_file);

    if (isset ($_POST['Simpan'])){

        if(!empty($sumber)){
        $sql_simpan = "INSERT INTO transaksi (nama_pembeli, alamat, email, no_hp, id_modul, jdl_modul, harga, status, paymentproof) VALUES (
        '".$_POST['nama']."',
        '".$_POST['alamat']."',
        '".$_POST['email']."',
        '".$_POST['nohp']."',
        '".$_POST['id_modul']."',
        '".$_POST['judul']."',
        '".$_POST['harga']."',
        'Proses',
        '".$nama_file."')";
        $query_simpan = mysqli_query($koneksi, $sql_simpan);
        mysqli_close($koneksi);

    if ($query_simpan) {
      echo "<script>
      Swal.fire({title: 'Transaction Success',text: '',icon: 'success',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          window.location = 'index.html';
          }
      })</script>";
      }else{

      echo "<script>
      Swal.fire({title: 'Transaction Failed',text: '',icon: 'error',confirmButtonText: 'OK'
      }).then((result) => {if (result.value){
          }
      })</script>";
    }
    }elseif(empty($sumber)){
        echo "<script>
        Swal.fire({title: 'Failed, Payment Proof need to be filled !',text: '',icon: 'error',confirmButtonText: 'OK'
        }).then((result) => {
            if (result.value) {
            }
        })</script>";
    }
    }
