<?php   
    require 'functions.php';

    print_r($_GET['id']);
    $hapus = HapusData($_GET['id']);
    if($hapus > 0) {
        header("location: index.php");
    }
    else mysqli_error($con);
?>
