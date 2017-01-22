<?php 
    session_start();

    if(!empty($_SESSION['username'])and !empty($_SESSION['password'])){
        include("../library/koneksi.php");
        define("INDEX",true);
?>
<?php include('header.php'); ?>
  <body class="hold-transition skin-blue sidebar-mini">

        <!-- Content Header (Page header) -->
        <!-- Main content -->
          <?php include('konten.php'); ?>
        
            <!-- right col (We are only adding the ID to make the widgets sortable)-->
<?php
    }else{
        echo"Dilarang membuka halaman ini";
        echo"<meta http-equiv='refresh' content='1; url=loginadmin.php'>";
    }
?>