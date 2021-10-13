<?php 
    require 'functions.php';
    
    $hapus =  hapus($_GET['id']);

    if($hapus > 0) {
        echo '<script>
            alert("Data Berhasil dihapus");
            window.location.href = "index.php";
            </script>';
    }
    else {
        echo '<script>alert("Data gagal dihapus")</script>';
        var_dump(mysqli_error($conn));
    }
?>