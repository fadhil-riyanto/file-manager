<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
    <p>Rename file</p>
    <input type="text">
    <button type="submit">Rubah!</button>
    </form>
</body>
</html>
<?php
//Kalau var yang di kirim ada isinya maka ia akan di cek
if(isset($_GET["ubah"])){
    //kalau udah di cek maka terima data dari get
    $nama_file =$_GET["ubah"];
    //Jika ia adalah direktory maka
        if(is_dir($nama_file)){
            //ubah si direktori nya
            echo "Itu bukan file!";
            //kembalikan user ke halaman utama
            //header("location: /index.php");
//Kalau yang di terima bukan direktori, melainkan file
}else{
    //ubah nama file dari tangkapan variabel di $_GET variable
    //unlink($nama_file);
    //rename("hai.txt", "my_file.txt");
    //kebalikan user ke awal
    //header("location: /index.php");
   
}}?>

rename("hai.txt", "my_file.txt");
?>