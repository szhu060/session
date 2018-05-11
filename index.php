<?php
/**
 * Created by PhpStorm.
 * User: shizhu
 * Date: 2018-04-09
 * Time: 12:50 PM
 */

session_start();


if(array_key_exists('color',$_POST)){
    $_SESSION['color'] = $_POST['color'];
}



?>

<!DOCTYPE html>
<html lang="en">
<head>

    <title>DOCUMENT</title>
    <meta charset="utf-8">
</head>
<body>
    <form action="" method="post">
        <label for="">Color</label>
        <input type="text" name="color">
        <input type="submit" value="Submit">
    </form>

    <?php
    echo $_SESSION['color'];
    ?>

</body>
</html>