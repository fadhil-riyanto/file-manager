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
</head>

<body>
    <style>
        ort {
            width: 50px;
        }

        .normal {
            width: 150px;
        }

        table {
            border-collapse: collapse;
            font-family: arial;
            color: #5E5B5C;
        }

        th {
            text-align: left;
            padding: 10px;
        }

        td {
            border-top: 1px solid #e3e3e3;
            padding: 10px;
        }

        tr:nth-child(even) {
            background: #F6F5FA;
        }

        tr:hover {
            background: #EAE9F5
        }
    </style>
    </style>
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