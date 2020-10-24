<?php
//Kalau var yang di kirim ada isinya maka ia akan di cek
if(isset($_GET["hapus"])){
    //kalau udah di cek maka terima data dari get
    $nama_file =$_GET["hapus"];
    //Jika ia adalah direktory maka
        if(is_dir($nama_file)){
            //hapus si direktori nya
            rmdir($nama_file);
            //kembalikan user ke halaman utama
            header("location: /file/index.php");
//Kalau yang di terima bukan direktori, melainkan file
}else{
    //hapus nama file dari tangkapan variabel di $_GET variable
    unlink($nama_file);
    //kebalikan user ke awal
    header("location: /file/index.php");
   
}}?>
