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
   
   
   <?php 
          if(isset($_POST['hitung'])){
            $wattac = $_POST['wattac'];
            $banyakac = $_POST['banyakac'];
            $jamac = $_POST['jamac'];
            $wattkulkas = $_POST['wattkulkas'];
            $banyakkulkas = $_POST['banyakkulkas'];
            $jamkulkas = $_POST['jamkulkas'];
            $watttv = $_POST['watttv'];
            $banyaktv = $_POST['banyaktv'];
            $jamtv = $_POST['jamtv'];
            $wattkipas = $_POST['wattkipas'];
            $banyakkipas = $_POST['banyakkipas'];
            $jamkipas = $_POST['jamkipas'];
            $wattlampu = $_POST['wattlampu'];
            $banyaklampu = $_POST['banyaklampu'];
            $jamlampu = $_POST['jamlampu'];
            $wattmc = $_POST['wattmc'];
            $banyakmc = $_POST['banyakmc'];
            $jammc = $_POST['jammc'];
            $total = ($wattac*$banyakac*$jamac)+($wattkulkas*$banyakkulkas*$jamkulkas)+($watttv*$banyaktv*$jamtv)+($wattkipas*$banyakkipas*$jamkipas)+($wattlampu*$banyaklampu*$jamlampu)+($wattmc*$banyakmc*$jammc);
            $totalkwh = $total/1000;
         }
          ?>


   <section class="m-4 mb-5">
   <?php if(isset($_POST['hitung'])){ ?>
      <form method="POST">
         <h1 class="text-center">SIMULASI BANYAK PEMAKAIAN LISTRIK</h1>
         <div class="container" id="spemakaian">
            <div class="row justify-content-center match-height">

               <div class="col-sm-6 col-md-6 col-lg-3 p-4 ">
                  <div class="card text-center">
                     <div class="m-4">
                        <img src="images/ac.png" alt="" class="" />
                        <h3 class="mt-0">Air Condition</h3>
                        <input class="mb-1" type="number" name= "wattac" value=<?php echo $wattac; ?> placeholder="Jumlah Watt">
                        <input class="mb-1" type="number" name= "banyakac" value=<?php echo $banyakac; ?> placeholder="Banyak Alat">
                        <input type="number" name= "jamac" value=<?php echo $jamac; ?> placeholder="Jam Per Hari">
                     </div>
                  </div>
               </div>

               <div class="col-sm-6 col-md-6 col-lg-3 p-4 ">
                  <div class="card text-center">
                     <div class="m-4">
                        <img src="images/kulkas.png" alt="" class="" />
                        <h3 class="mt-0">Kulkas</h3>
                        <input class="mb-1" type="number" name= "wattkulkas" value=<?php echo $wattkulkas; ?> placeholder="Jumlah Watt">
                        <input class="mb-1" type="number" name= "banyakkulkas" value=<?php echo $banyakkulkas; ?> placeholder="Banyak Alat">
                        <input type="number" name= "jamkulkas" value=<?php echo $jamkulkas; ?> placeholder="Jam Per Hari">
                     </div>
                  </div>
               </div>

               <div class="col-sm-6 col-md-6 col-lg-3 p-4 ">
                  <div class="card text-center">
                     <div class="m-4">
                        <img src="images/tv.png" alt="" class="" />
                        <h3 class="mt-0">Television</h3>
                        <input class="mb-1" type="number" name= "watttv" value=<?php echo $watttv; ?> placeholder="Jumlah Watt">
                        <input class="mb-1" type="number" name= "banyaktv" value=<?php echo $banyaktv; ?> placeholder="Banyak Alat">
                        <input type="number"name= "jamtv" value=<?php echo $jamtv; ?> placeholder="Jam Per Hari">
                     </div>
                  </div>
               </div>

               <div class="col-sm-6 col-md-6 col-lg-3 p-4 ">
                  <div class="card text-center">
                     <div class="m-4">
                        <img src="images/kipas.png" alt="" class="" />
                        <h3 class="mt-0">Kipas</h3>
                        <input class="mb-1" type="number" name= "wattkipas" value=<?php echo $wattkipas; ?> placeholder="Jumlah Watt">
                        <input class="mb-1" type="number" name= "banyakkipas" value=<?php echo $banyakkipas; ?> placeholder="Banyak Alat">
                        <input type="number" name= "jamkipas" value=<?php echo $jamkipas; ?> placeholder="Jam Per Hari">
                     </div>
                  </div>
               </div>

               <div class="col-sm-6 col-md-6 col-lg-3 p-4 ">
                  <div class="card text-center">
                     <div class="m-4">
                        <img src="images/lampu.png" alt="" class="mb" />
                        <h3 class="mt-0">Lampu</h3>
                        <input class="mb-1" type="number" name= "wattlampu" value=<?php echo $wattlampu; ?> placeholder="Jumlah Watt">
                        <input class="mb-1" type="number" name= "banyaklampu" value=<?php echo $banyaklampu; ?> placeholder="Banyak Alat">
                        <input type="number" name= "jamlampu" value=<?php echo $jamlampu; ?> placeholder="Jam Per Hari">
                     </div>
                  </div>
               </div>

               <div class="col-sm-6 col-md-6 col-lg-3 p-4 ">
                  <div class="card text-center">
                     <div class="m-4">
                        <img src="images/mcuci.png" alt="" class="mb" />
                        <h3 class="mt-0">Mesin Cuci</h3>
                        <input class="mb-1" type="number" name= "wattmc" value=<?php echo $wattmc; ?> placeholder="Jumlah Watt">
                        <input class="mb-1" type="number" name= "banyakmc" value=<?php echo $banyakmc; ?> placeholder="Banyak Alat">
                        <input type="number" name= "jammc" value=<?php echo $jammc; ?> placeholder="Jam Per Hari">
                     </div>
                  </div>
               </div>


            </div>
           



            <div class="d-flex row align-items-center text-center">
            <div class="col-12 text-center">
               <h2 class="">Watt yang Digunakan Yaitu <?php echo$totalkwh ?> Kwh Per Hari</h2>
               <h2>Atau</h2>
               <h2 class="">Watt yang Digunakan Yaitu <?php echo$total ?> Kwh Per Hari</h2>
               </div>
               <div class="col-12 text-center">
               <input type="submit" name="hitung" value="Hitung" class="tombol tombol-posisi">
               <input type="submit" href="" name="reset" value="Reset" class="tombol tombol-posisi tombol-reset">										
               
               </div>
               
            </div>
         </div>
      </form>
      
      <?php }
      else{ ?>

      <form method="POST">
         <h1 class="text-center">SIMULASI BANYAK PEMAKAIAN LISTRIK</h1>
         <div class="container" id="spemakaian">
            <div class="row justify-content-center match-height">

               <div class="col-sm-6 col-md-6 col-lg-3 p-4 ">
                  <div class="card text-center">
                     <div class="m-4">
                        <img src="images/ac.png" alt="" class="" />
                        <h3 class="mt-0">Air Condition</h3>
                        <input class="mb-1" type="number" name= "wattac" value="wattac" placeholder="Jumlah Watt">
                        <input class="mb-1" type="number" name= "banyakac" value="jumlahac" placeholder="Banyak Alat">
                        <input type="number" name= "jamac" value="Jam Per Hari" placeholder="Jam Per Hari">
                     </div>
                  </div>
               </div>

               <div class="col-sm-6 col-md-6 col-lg-3 p-4 ">
                  <div class="card text-center">
                     <div class="m-4">
                        <img src="images/kulkas.png" alt="" class="" />
                        <h3 class="mt-0">Kulkas</h3>
                        <input class="mb-1" type="number" name="wattkulkas" value="watt" placeholder="Jumlah Watt">
                        <input class="mb-1" type="number" name="banyakkulkas" value="banyak" placeholder="Banyak Alat">
                        <input type="number" name="jamkulkas" value="Jam Per Hari" placeholder="Jam Per Hari">
                     </div>
                  </div>
               </div>

               <div class="col-sm-6 col-md-6 col-lg-3 p-4 ">
                  <div class="card text-center">
                     <div class="m-4">
                        <img src="images/tv.png" alt="" class="" />
                        <h3 class="mt-0">Television</h3>
                        <input class="mb-1" type="number" name="watttv" value="watt" placeholder="Jumlah Watt">
                        <input class="mb-1" type="number" name="banyaktv" value="banyak" placeholder="Banyak Alat">
                        <input type="number" name="jamtv" value="Jam Per Hari" placeholder="Jam Per Hari">
                     </div>
                  </div>
               </div>

               <div class="col-sm-6 col-md-6 col-lg-3 p-4 ">
                  <div class="card text-center">
                     <div class="m-4">
                        <img src="images/kipas.png" alt="" class="" />
                        <h3 class="mt-0">Kipas</h3>
                        <input class="mb-1" type="number" name="wattkipas" value="watt" placeholder="Jumlah Watt">
                        <input class="mb-1" type="number" name="banyakkipas" value="banyak" placeholder="Banyak Alat">
                        <input type="number" name="jamkipas" value="Jam Per Hari" placeholder="Jam Per Hari">
                     </div>
                  </div>
               </div>

               <div class="col-sm-6 col-md-6 col-lg-3 p-4 ">
                  <div class="card text-center">
                     <div class="m-4">
                        <img src="images/lampu.png" alt="" class="mb" />
                        <h3 class="mt-0">Lampu</h3>
                        <input class="mb-1" type="number" name="wattlampu" value="watt" placeholder="Jumlah Watt">
                        <input class="mb-1" type="number" name="banyaklampu" value="banyak" placeholder="Banyak Alat">
                        <input type="number" name="jamlampu" value="Jam Per Hari" placeholder="Jam Per Hari">
                     </div>
                  </div>
               </div>

               <div class="col-sm-6 col-md-6 col-lg-3 p-4 ">
                  <div class="card text-center">
                     <div class="m-4">
                        <img src="images/mcuci.png" alt="" class="mb" />
                        <h3 class="mt-0">Mesin Cuci</h3>
                        <input class="mb-1" type="number" name="wattmc" value="watt" placeholder="Jumlah Watt">
                        <input class="mb-1" type="number" name="banyakmc" value="banyak" placeholder="Banyak Alat">
                        <input type="number" name="jammc" value="Jam Per Hari" placeholder="Jam Per Hari">
                     </div>
                  </div>
               </div>


            </div>
           
            <div class="row">
               <div class="col-12 text-center">
               <input type="submit" name="hitung" value="Hitung" class="tombol tombol-posisi">
               <input type="submit" href="" name="reset" value="Reset" class="tombol tombol-posisi tombol-reset">										
               
               </div>
      
            </div>
         </div>
      </form>
      <?php } ?>	

   </section>
   <!-- end section -->
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