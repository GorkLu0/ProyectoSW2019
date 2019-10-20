<!DOCTYPE html>
<html>

<head>
    <script src="../js/jquery-3.4.1.min.js"></script>

    <?php include '../html/Head.html' ?>
</head>

<body>
    <?php include '../php/Menus.php' ?>
    <section class="main" id="s1">

    </section>
    <?php include '../html/Footer.html' ?>
</body>

</html>

<?php

echo "<script type='text/javascript'> window.onload=alertredirect('HASTA PRONTO'); </script>";
function alertredirect($mensaje)
{
    echo "<script type='text/javascript'>alert('$mensaje'); window.location.href = 'Layout.php'; </script>";
}
?>