<?php include'config/connect.php' ?>
<?php

$phones=mysqli_fetch_all(mysqli_query($con,'select * from phones'),MYSQLI_ASSOC);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><table></table></title>
</head>
<body>
    <table>
        <tr>
            <td>name</td>
            <td>phone</td>
            <td>price</td>
            </tr>
<?php foreach($phones as $phone): ?>
        <tr>
                <td><?php echo $phone['name']; ?></td>
                <td><?php echo $phone['phone']; ?></td>
                <td><?php echo $phone['price']; ?></td>
        </tr>
            <?php endforeach ?>
    </table>
</body>
</html>