<?php
    $nilai = [
        ["no" => 1, "nama" => "Ridho", 
        "matkul" => [
            ["nama_mk" =>"Pemrograman I", "sks" => 2], 
            ["nama_mk" => "Praktikum Pemrograman I", "sks" => 1],
            ["nama_mk" => "Pengantar Lingkungan Lahan Basah", "sks" => 2], 
            ["nama_mk" => "Arsitektur Komputer", "sks" => 3]
        ]
        ],

        ["no" => 2, "nama" => "Ratna", 
        "matkul" => [
            ["nama_mk" =>"Basis Data I", "sks" => 2], 
            ["nama_mk" => "Praktikum Basis Data I", "sks" => 1],
            ["nama_mk" => "Kalkulus", "sks" => 3]
        ]
        ],

        ["no" => 3, "nama" => "Tono", 
        "matkul" => [
            ["nama_mk" => "Rekayasa Perangkat Lunak", "sks" => 3], 
            ["nama_mk" => "Analisis dan Perancangan Sistem", "sks" => 3],
            ["nama_mk" => "Komputasi Awan", "sks" => 3], 
            ["nama_mk" => "Kecerdasan Bisnis", "sks" => 3]
        ]
        ]
    ];

    for ($i=0; $i < count($nilai); $i++) {
        $jmlSks = 0;
        for ($j=0; $j < count($nilai[$i]["matkul"]); $j++) { 
            $jmlSks += $nilai[$i]["matkul"][$j]["sks"];
        }
        $nilai[$i]["jmlSks"] = $jmlSks;
        if ($nilai[$i]["jmlSks"] < 7) {
            $nilai[$i]["keterangan"] = "<div style='background-color:red;'>Revisi KRS</div>";
        } else {
            $nilai[$i]["keterangan"] = "<div style='background-color:#ACD1AF;'>Tidak Revisi KRS</div>";
        }
    }


    // print_r($nilai);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <style>
        table, tr, td, th {
            border: solid 1px black;
            border-collapse: collapse;
            padding: 5px;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>
<body>
    <table>
        <tr>
            <td>No</td>
            <td>Nama</td>
            <td>Mata Kuliah diambil</td>
            <td>SKS</td>
            <td>Total SKS</td>
            <td>Keterangan</td>
        </tr>
        <?php
            for ($i=0; $i < count($nilai); $i++) {
                for ($j=0; $j < count($nilai[$i]["matkul"]); $j++) { 
                    echo "<tr>";
                    if ($j == 0) {
                        echo "<td>".$nilai[$i]["no"]."</td>";
                        echo "<td>".$nilai[$i]["nama"]."</td>";
                        echo "<td>".$nilai[$i]["matkul"][$j]["nama_mk"]."</td>";
                        echo "<td>".$nilai[$i]["matkul"][$j]["sks"]."</td>";
                        echo "<td>".$nilai[$i]["jmlSks"]."</td>";
                        echo "<td>".$nilai[$i]["keterangan"]."</td>";
                    }else {
                        echo "<td></td>";
                        echo "<td></td>";
                        echo "<td>".$nilai[$i]["matkul"][$j]["nama_mk"]."</td>";
                        echo "<td>".$nilai[$i]["matkul"][$j]["sks"]."</td>";
                        echo "<td></td>";
                        echo "<td></td>";
                    }
                    echo "</tr>";
                }
            }
        ?>
    </table>
</body>
</html>