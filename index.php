<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>CRUD - wiele do wielu</title>
</head>
<body>
    <div class="container">
        <div class="item a"></div>
        <div class="item b">
            <div class="insert">
                <input type="text" class="tekst" placeholder="Podaj " name="" id="">
                <input type="text" class="tekst" placeholder="Podaj " name="" id="">
                <input type="submit" value="Dodaj">
            </div>

        </div>
        <div class="item c">
            <?php
                $conn = new mysqli("127.0.0.1", "root", "", "bibl");
                $sql = "SELECT * FROM lib_autor, lib_autor_tytul, lib_tytul WHERE 
                lib_autor.id_autor = lib_autor_tytul.id_autor
                AND lib_tytul.id_tytul = lib_autor_tytul.id_tytul";
                $result = mysqli_query($conn, $sql);

                echo("<table>");
                echo("
                <th>Nazwisko</th>
                <th>Tytuł</th>
                ");
                while($row=mysqli_fetch_assoc($result)){
                    echo("<tr>");
                    echo("<td>");
                    echo($row['name']);
                    echo("</td>");
                    echo("<td>");
                    echo($row['tytul']);
                    echo("</td>");
                    echo("</tr>");
                }
                echo("</table>");
            ?>
        </div>
        <div class="item d"></div>
    </div>
</body>
<script src="main.js"></script>
</html>