<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Wojtek Kaźmierczak</title>
</head>
<body>
    <div class="container">
        <div class="item a">
            <h1>Wojtek Kaźmierczak gr 2</h1>
        </div>
        <div class="item b">
            <div class="insert">
                <form action="insert.php" method="post">
                    <input type="text" class="tekst" placeholder="Podaj autora" name="name" id="">
                    <input type="text" class="tekst" placeholder="Podaj tytuł" name="tytul" id="">
                    <input type="submit" value="Dodaj">
                </form>
            </div>

        </div>
        <div class="item c">
            <?php
                $conn = new mysqli("sql7.freemysqlhosting.net", "sql7373145", "neAKxXba6X", "sql7373145");
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