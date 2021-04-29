<!DOCTYPE html>
<html lang="en">

<head>
   <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Kelompok 2</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" href="css/bootstrap.css">
   <!-- style css -->
   
   <link rel="stylesheet" href="css/style.css">
   <link rel="stylesheet" href="css/style1.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="css/style1.css">
   <script src="js/vendor/modernizr-2.8.3.min.js"></script>
   <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout">
   <!-- header -->
   <header>
      <!-- header inner -->
      <div class="container-fluid">
         <div class="row">
            <div class="col logo_section">
               <div class="full">
                  <div class="center-desk">
                     <div class="logo"> <a href="index.html"><img src="images/logo.png" alt="#"></a> </div>
                  </div>
               </div>
            </div>
            <div class="col-lg-9">
               <div class="menu-area">
                  <div class="limit-box">
                     <nav class="main-menu">
                        <ul class="menu-area-main">
                           <li class="active">
                              <a href="index.html">Home</a>
                           </li>
                           <li>
                              <a href="spemakaian.php">Simulasi Pemakaian</a>
                           </li>
                           <li>
                              <a href="splts.php">Simulasi PLTS</a>
                           </li>
                           <!-- <li>
                              <a href="blog.html">Blog</a>
                           </li>
                           <li>
                              <a href="contact.html">Contact us</a>
                           </li>
                           <li>
                              <a href="#">Login</a>
                           </li>
                           <li>
                              <a href="#">Register</a>
                           </li> -->
                           <li>
                              <a href="#"><img src="images/search_icon.png" alt="#" /></a>
                           </li>
                        </ul>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end header inner -->
   </header>
   <!-- end header -->


   <section class="layout_padding">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <div class="heading" style="padding-left: 15px;padding-right: 15px;">
                  <h4 style="border-bottom: solid #333 1px;">Kalkulasi PLTS</h4>
               </div>
            </div>
         </div>

         <div class="row margin_top_30">
            <div class="col-md-12 margin_top_30">
               <div class="heading text-center" style="padding-left: 15px;padding-right: 15px;">
                  <h4>Hitung Berapa Panel Surya yang Kamu Butuhkan</h4>
               </div>
            </div>
         </div>

        

         <div class="row">
            <div class="col-md-12">
               <div class="full comment_form">
                  
                     <fieldset>
                        <div class="col-md-12">
                           <div class="row">
                              <div class="col-md-6">
                              <?php 
         if(isset($_POST['hitung'])){
            $kwh = $_POST['kwh'];
            $wp = $_POST['wp'];
            $jam = $_POST['jam'];
            $panel = ($kwh / ($wp*$jam))*2;
         }

            ?>

                              <?php if(isset($_POST['hitung'])){ ?>
                                 <form method="POST">

                                    <label class="d-flex justify-content-center mt-4" >Total Konsumsi Daya
                                       Per Hari</label>
                                    <input type="number" name="kwh" class="isi"
                                       placeholder="Masukkan Kwh per Hari" value="<?php echo $kwh; ?>">

                                    <label class="d-flex justify-content-center mt-1">Masukkan Watt Peak per Panel
                                       Surya</label>
                                    <input  type="number" name="wp" class="isi"
                                       placeholder="Masukkan Watt Peak" value="<?php echo $wp; ?>">

                                    <label class="d-flex justify-content-center mt-4" >Durasi Penyinaran
                                       Matahari</label>
                                    <input type="number" name="jam" class="isi"
                                       placeholder="Masukkan Banyak Jam/Hari" value="<?php echo $jam; ?>">


                                    <input type="submit" name="hitung" value="Hitung" class="tombol tombol-posisi">

                                    <input type="submit" href="" name="reset" value="Reset"
                                       class="tombol tombol-posisi tombol-reset">
                                 </form>
                              </div>
                              <div class="col-md-6  d-flex align-items-center text-center">

                                 <div>
                                    <img src="images/surya.jpg" alt="">
                                    <h2 class="mt-5">Panel Surya Yang Dibutuhkan Yaitu Sebanyak <?php echo $panel; ?> Buah</h2>
                                 
                                 </div>
                              </div>
                           
                              <?php }
                               else{ ?>

                                 <form method="POST">

                                    <label class="d-flex justify-content-center mt-4" >Total Konsumsi Daya
                                       Per Hari</label>
                                    <input type="number" name="kwh" class="isi" autocomplete="off"
                                       placeholder="Masukkan Wh per Hari" value="kwh">

                                    <label class="d-flex justify-content-center mt-1">Masukkan Watt Peak per Panel
                                       Surya</label>
                                    <input  type="number" name="wp" class="isi" autocomplete="off"
                                       placeholder="Masukkan Watt Peak" value="wp">

                                    <label class="d-flex justify-content-center mt-4">Durasi Penyinaran
                                       Matahari</label>
                                    <input type="number" name="jam" class="isi" autocomplete="off"
                                       placeholder="Masukkan Banyak Jam/Hari" value="jam">


                                    <input type="submit" name="hitung" value="Hitung" class="tombol tombol-posisi">

                                    <input type="submit" href="" name="reset" value="Reset"
                                       class="tombol tombol-posisi tombol-reset">
                                 </form>
                              </div>
                              <div class="col-md-6  d-flex align-items-center text-center">

                                 <div>
                                 <img src="images/surya.jpg" alt="">
                                    <h2 class="mt-5"></h2>
                                 
                                 </div>
                              </div>
                           
                              <?php } ?>	

                           </div>

                        </div>
                     </fieldset>
                
               </div>
            </div>
         </div>
      </div>
   </section>


   <div class="cpy bg-dark">
      <div class="container">
         <div class="row">
            <div class="col-md-12">
               <p class="text-white">Copyright © 2021 Design by <a class="text-white" href="
                     https://instagram.com/dhanielfaraby/">Dhani Elfaraby</a> </p>
            </div>
         </div>
      </div>
   </div>


    <!-- Javascript files-->
 <script src="js/jquery.min.js"></script>
   <script src="js/popper.min.js"></script>
   <script src="js/bootstrap.bundle.min.js"></script>
   <script src="js/jquery-3.0.0.min.js"></script>
   <script src="js/plugin.js"></script>
   <script src="js/owl.carousel.min.js"></script>
   <script src="js/contact-form.js"></script>
   <script src="js/ajaxchimp.js"></script>
   <script src="js/scrollUp.min.js"></script>
   <script src="js/magnific-popup.min.js"></script>
   <script src="js/wow.min.js"></script>
   <!-- Scrollbar Js Files -->

   <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
   <script src="js/custom.js"></script>
</body>

</html>