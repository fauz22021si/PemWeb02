<?php
    require_once 'dbkoneksi.php' ;

    if(isset($_GET['iddel'])){
        $iddel = $_GET['iddel'];
        $query = "DELETE FROM pelanggan WHERE id=$iddel";
        echo '<meta http-equive="refresh" content="0; url=list_pelanggan.php';
    }
