<?php
    require_once("connect.php");
    $del = $_POST['id_del'];
    $sql = 'DELETE FROM lib_autor_tytul WHERE id_autor_tytul=$del';
    mysqli_query($conn, $sql);
    header("Location:index.php");
?>