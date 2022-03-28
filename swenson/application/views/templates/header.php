<!DOCTYPE html>
<html lang="en">
<head>
     <title><?= $title; ?></title> 
<!-- 
Hydro Template 
http://www.templatemo.com/tm-509-hydro
-->
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=Edge">
     <meta name="description" content="">
     <meta name="keywords" content="">
     <meta name="author" content="">
     <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

     <link rel="stylesheet" href="<?= base_url(); ?>assets/css/bootstrap.min.css">
     <link rel="stylesheet" href="<?= base_url(); ?>assets/css/magnific-popup.css">
     <link rel="stylesheet" href="<?= base_url(); ?>assets/css/font-awesome.min.css">

     <!-- MAIN CSS -->
     <link rel="stylesheet" href="<?= base_url(); ?>assets/css/templatemo-style.css">
</head>
<body>

     <!-- PRE LOADER -->
     <section class="preloader">
          <div class="spinner">
               <span class="spinner-rotate"></span>
          </div>
     </section>


     <!-- MENU -->
     <section class="navbar custom-navbar navbar-fixed-top" role="navigation">
          <div class="container">

               <div class="navbar-header">
                    <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                         <span class="icon icon-bar"></span>
                    </button>

                    <!-- lOGO TEXT HERE -->
                    <a href="<?= base_url(); ?>" class="navbar-brand">Swenson</a>
               </div>

               <!-- MENU LINKS -->
               <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-nav-first">
                         <li><a href="#home" class="smoothScroll">Home</a></li>
                         <li><a href="#about" class="smoothScroll">About</a></li>
                         <li><a href="#blog" class="smoothScroll">Blog</a></li>
                         <li><a href="#work" class="smoothScroll">Waifu</a></li>
                         <li><a href="#contact" class="smoothScroll">Info</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right">
                         <li><a href="https://facebook.com/shouko.sagiri"><i class="fa fa-facebook-square"></i></a></li>
                         <li><a href="https://twitter.com/shouko_sagiri"><i class="fa fa-twitter"></i></a></li>
                         <li><a href="https://www.instagram.com/hinasato.poi/"><i class="fa fa-instagram"></i></a></li>
                         <li class="section-btn"><a href="#" data-toggle="modal" data-target="#modal-form">Sign in / Join</a></li>
                    </ul>
               </div>

          </div>
     </section>
