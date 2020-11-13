<?php
    require_once("connect.php");
    $del = $_POST['id_del'];
    $sql = "DELETE FROM lib_wypozyczenia WHERE id_wypozyczenia=$del";
    mysqli_query($conn, $sql);
    header("Location: wypozyczenia.php");
?>