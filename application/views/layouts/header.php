<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title><?= $title ?></title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="<?= base_url(); ?>assets/LP/img/favicon.png" rel="icon">
  <link href="<?= base_url(); ?>assets/LP/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="<?= base_url(); ?>assets/LP/vendor/aos/aos.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/LP/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/LP/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/LP/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/LP/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/LP/vendor/remixicon/remixicon.css" rel="stylesheet">
  <link href="<?= base_url(); ?>assets/LP/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/Admin/'); ?>css/sb-admin-2.min.css" rel="stylesheet">
  <link href="<?= base_url('assets/Admin/'); ?>vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="<?= base_url(); ?>assets/LP/css/style.css" rel="stylesheet">
</head>

<body>
<!-- ======= Header ======= -->
<header id="header" class="fixed-top ">
  <div class="container d-flex align-items-center justify-content-lg-between">

    <h1 class="logo me-auto me-lg-0"><a href="<?= base_url('Home'); ?>">Jaya Motor<span>.</span></a></h1>
    <nav id="navbar" class="navbar order-last order-lg-0">
      <ul>
        <li><a class="nav-link scrollto active" href="<?= base_url('Home')?>#hero">Beranda</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url('Home')?>#services">Layanan</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url('Home')?>#testimonials">Testimoni</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url('Home')?>#contact">Alamat Kami</a></li>
        <li><a class="nav-link scrollto" href="<?= base_url('Listing')?>#pesanan">Antrian</a></li>
      </ul>
      <i class="bi bi-list mobile-nav-toggle"></i>
    </nav>
    <!--navbar -->
    <a href="<?= base_url('Booking'); ?>#order" class="get-started-btn scrollto">Booking Service</a>
  </div>
</header><!-- End Header -->