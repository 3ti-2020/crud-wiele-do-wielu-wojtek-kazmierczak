<?php
     require_once("connect.php");

     if ($conn->connect_error) {
       die("Connection failed: " . $conn->connect_error);
     }


     $sql1 = "INSERT INTO lib_autor VALUES (NULL, '".$_POST['name']."')"; 

     if ($conn->query($sql1) === TRUE) {
     $last_idlib_autor = $conn->insert_id;
     echo "New record created successfully. Last inserted ID is: " . $last_id;
     } else {
     echo "Error: " . $sql1 . "<br>" . $conn->error;
     }


     $sql2 = "INSERT INTO lib_tytul VALUES (NULL, '".$_POST['tytul']."')";

     if ($conn->query($sql2) === TRUE) {
     $last_idlib_tytul = $conn->insert_id;  
     echo "New record created successfully. Last inserted ID is: " . $last_id;
     } else {
     echo "Error: " . $sql2 . "<br>" . $conn->error;
     }    
     
     $sql3 = "INSERT INTO lib_autor_tytul VALUES (NULL, $last_idlib_autor,$last_idlib_tytul)";
     $result3 = mysqli_query($conn, $sql3);
     header("Location: index.php");

?>