<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="GET">
    <p>Rename file</p>
    <input type="text" name="perubahan">
    <button type="submit">Rubah!</button>
    </form>
</body>
</html>
<?php

if($_SERVER["REQUEST_METHOD"] == "GET"){
    $nama_file =$_GET["ubah"];
    $nama_file_ubah = $_GET["perubahan"];
        if(empty($nama_file_ubah)){
            echo "Mohon isi nama file";
        }
        //ubah nama file dari tangkapan variabel di $_GET variable
        rename($nama_file, $nama_file_ubah);
        
        $sum = 0;
  
        for ($i = 0; $i <= ($n - 1); $i++) {
          $sum += (1 / (1 + (3*$i)));
        }
        
        return number_format($sum, 2, '.', '');
}?>