<!-- PHP -->
<?php
$ListSamsung = ['Samsung Galaxy S22', 'Samsung Galaxy S22+', 'Samsung Galaxy A03', 'Samsung Galaxy Xcover 5'];
?>
<!-- HTML -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Praktikum - no 4</title>
    <!-- Css -->
    <style>
        .Samsung {
            font-weight: bold;
        }
    </style>
</head>
<body>
<table border="1">
        <tr>
            <td class="Samsung">Daftar Smartphone Samsung</td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung[0]; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung[1]; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung[2]; ?></td>
        </tr>
        <tr>
            <td><?php echo $ListSamsung[3]; ?></td>
        </tr>
    </table>
</body>
</html>
