<?php
     $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373145", "neAKxXba6X", "sql7373145");
     $autor = $_POST['name'];
     $tytul = $_POST['tytul'];

     $sql1 = "INSERT INTO lib_autor VALUES (NULL, $autor)"; 
          $last_idlib_autor = $conn->insert_id;
     $sql2 = "INSERT INTO lib_tytul VALUES (NULL, $tytul)";
          $last_idlib_tytul = $conn->insert_id;     
   
     $sql3 = "INSERT INTO lib_autor_tytul VALUES (NULL, $last_idlib_autor,$last_idlib_tytul)";

     $result = mysqli_query($conn, $sql);
     header("Location: index.php");