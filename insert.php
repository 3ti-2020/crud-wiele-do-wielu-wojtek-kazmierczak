<?php
     $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373145", "neAKxXba6X", "sql7373145");
     $autor = $_POST['name'];
     $tytul = $_POST['tytul'];
     $sql = "INSERT INTO lib_autor VALUES (NULL, $autor); INSERT INTO lib_tytul VALUES (NULL, $tytul);";
     $result = mysqli_query($conn, $sql);
     header("Location: index.php");
?>