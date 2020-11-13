<?php
    require_once("connect.php");
    $today = date("Y-m-d");
    $dataOddania = $_POST['dataOddania'];
    $id = $_POST['id'];
    $sql = "INSERT INTO lib_wypozyczenia VALUES (NULL, 2, '$id', '$today', '$dataOddania')";
    mysqli_query($conn, $sql);
    header("Location: wypozyczenia.php");
?>

