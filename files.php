<?php
$path = "C:/laragon/www";
$scann = scandir($path);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File manager</title>
    <link rel="stylesheet" type="text/css" href="style_table.css">
</head>

<body>
    
    <h1>Simple file manager</h1>
    <hr>
    <table border="1">
    <thead>
        <tr>
            <th>
                file
            </th>
            <th>
                delete
            </th>
        </tr>
        </thead>
        <tbody>
        <tr><?php foreach ($scann as $hasil_scann):?>
            <td>
                <a href="<?=$hasil_scann;?>"><?=$hasil_scann;?></a>
            </td>
            <td>
                <a href="del.php/?hapus=<?=$hasil_scann;?>">Hapus</a>
            </td>
        </tr><?php endforeach;?>
        </tbody>
    </table>

</body>

</html>