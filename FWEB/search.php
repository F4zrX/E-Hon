<?php
    include "assets/php/koneksi.php";

    $sql_cek = "SELECT * FROM modul";
    $query_cek = mysqli_query($koneksi, $sql_cek);
    $data_cek = mysqli_fetch_array($query_cek,MYSQLI_BOTH);
    {
?>
<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,200,300,400,500,600,700,800,900&display=swap" rel="stylesheet">

    <title>E-Hon</title>


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
                            <li class="scroll-to-section"><a href="index.html">Home</a></li>
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

    
    
    <!-- ***** Products Area Starts ***** -->
        <div class="container" style="margin-top: 8%; margin-bottom: 3%;">
            <div class="row">
                <div class="col-lg-10">
                    <div class="section-heading">
                        <form class="d-flex" role="search">
                            <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
                            <button class="btn btn-outline-primary" type="submit">Search</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-10">
              <div style="margin:13px;"></div>
              <div class="card">
                <div class="card-header">Products</div>
                <div class="card-body">
                    <?php
            }

            $sql_tampil = "select * from modul where jdl_modul like=%'".$_GET['search']."'%";
            $query_tampil = mysqli_query($koneksi, $sql_tampil);
            $no=1;
            while ($data = mysqli_fetch_array($query_tampil,MYSQLI_BOTH)) {
        ?>

        <div class="card-body p-0">
                <table class="table">
                    <tbody>
                        <tr>
                            <td style="width: 5%;">
                                <div class="text-left">
                                    <img src="../BEND/cover/<?php echo $data['cover_modul']; ?>" width="140px"/>
                                </div>
                            <td>
                                <div class="text-left">
                                    <b><?php echo $data['jdl_modul']; ?></b>
                                </div>

                                <div class="text-left">
                                    Categories : <a href="./report/cetak-modul.php?id_modul=<?php echo $data_cek['id_modul'];  ?>" target=" _blank"
                            title="Cetak Data Modul"><?php echo $data['kategori']; ?></a>
                                </div>

                                <div class="text-left">
                                    Price : Rp.<?php echo $data['harga_modul']; ?>
                                </div>


                                 <div style="margin-top: 5%;" class="text-left">
                                     <a href="details.php?kode=<?php echo $data['id_modul']; ?>" title="Detail" target=" _blank" title="Cetak Data Modul" class="btn btn-primary">Details</a>
                                 </div>
                            </td>
                            <td>
                            
                            </td>
                        </tr>
                        
                </table>
            </div>
            <?php } ?>
                </div>
              </div>
              <div style="margin:13px;"></div>
            </div>
            <div class="col-sm-2">
              <div class="card">
                <div class="card-header">Categories</div>
                <ul class="list-group list-group-flush">
                    <li class="list-group-item"><a href="distinct.php?kode=2D Animation" class="nav-link" aria-current="page">2D Animation</a></li>
                    <li class="list-group-item"><a href="distinct.php?kode=3D Animation" class="nav-link" aria-current="page">3D Animation</a></li>
                    <li class="list-group-item"><a href="distinct.php?kode=Programming" class="nav-link" aria-current="page">Programming</a></li>
                    <li class="list-group-item"><a href="distinct.php?kode=Mobile" class="nav-link" aria-current="page">Mobile</a></li>
                    <li class="list-group-item"><a href="distinct.php?kode=Web" class="nav-link" aria-current="page">Web</a></li>
                    <li class="list-group-item"><a href="distinct.php?kode=Graphic" class="nav-link" aria-current="page">Graphic</a></li>
                </ul>
              </div>
              <div style="margin:13px;"></div>
              <div style="margin:13px;"></div>
            </div>
          </div>
        </div>
    <!-- ***** Products Area Ends ***** -->
    
    <!-- ***** Footer Start ***** -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="first-item">
                        <div class="logo">
                            <img src="assets/images/white-logo.png" alt="hexashop ecommerce templatemo">
                        </div>
                        <ul>
                            <li><a href="#">16501 Collins Ave, Sunny Isles Beach, FL 33160, United States</a></li>
                            <li><a href="#">hexashop@company.com</a></li>
                            <li><a href="#">010-020-0340</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <h4>Shopping &amp; Categories</h4>
                    <ul>
                        <li><a href="#">Men’s Shopping</a></li>
                        <li><a href="#">Women’s Shopping</a></li>
                        <li><a href="#">Kid's Shopping</a></li>
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
                        <p>Copyright © 2022 HexaShop Co., Ltd. All Rights Reserved. 
                        
                        <br>Design: <a href="https://templatemo.com" target="_parent" title="free css templates">TemplateMo</a></p>
                        <ul>
                            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-linkedin"></i></a></li>
                            <li><a href="#"><i class="fa fa-behance"></i></a></li>
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
    
    <!-- Global Init -->
    <script src="assets/js/custom.js"></script>

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

</html>
