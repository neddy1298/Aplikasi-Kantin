<?php
    session_start();
    include "header.php";
?>
    <!-- Main content -->
    <section class="content">
    <?php

        error_reporting(0);

        $page = $_GET['p'];

        if($page=="home"){
            include "home.php";
        }else if($page=="register"){
            include "register.php";
        }else if($page=="login"){
            include "login.php";
        }else if($page=="tambahbarang"){
            include "tambahbarang.php";
        }else if($page=="databarang"){
            include "databarang.php";
        }else if($page=="editbarang"){
            include "editbarang.php";
        }else if($page=="tambahstock"){
            include "tambahstock.php";
        }else if($page=="historistock"){
            include "historistock.php";
        }else if($page=="editstock"){
            include "editstock.php";
        }else if($page=="penjualan"){
            include "penjualan.php";
        }else if($page=="datapenjualan"){
            include "datapenjualan.php";
        }else{
            include 'home.php';
        }
        
    ?>
</section>
<?php
    include "footer.php";
?>