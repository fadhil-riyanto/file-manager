<?php

if(isset($_GET["hapus"])){
    $nama_file =$_GET["hapus"];
        if(is_dir($nama_file)){
            rmdir($nama_file);
            header("location: /files.php");

}else{
    unlink($nama_file);
    header("location: /files.php");
   
}}?>
