<?php
     $conn = new mysqli("127.0.0.1", "root", "", "bibl");
     $autor = $_POST['name'];
     $tytul = $_POST['tytul'];
     $sql = "INSERT INTO lib_autor VALUES ($autor); INSERT INTO lib_tytul VALUES ($tytul)";
     $result = mysqli_query($conn, $sql);
     header("Location: index.php");
?>