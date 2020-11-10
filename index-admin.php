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
            <div class="title">
                <h1>Wojtek Kaźmierczak gr 2</h1>
            </div>
            <div class="tables">
                <a class="btnTabele" href="tables.html">Tabele</a>
                <a class="btnGithub" href="https://github.com/3ti-2020/crud-wiele-do-wielu-wojtek-kazmierczak">GitHub</a>
            </div>
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
                require_once("connect.php");
                $sql = "SELECT * FROM lib_autor, lib_autor_tytul, lib_tytul WHERE 
                lib_autor.id_autor = lib_autor_tytul.id_autor
                AND lib_tytul.id_tytul = lib_autor_tytul.id_tytul";
                $result = mysqli_query($conn, $sql);

                echo("<table>");
                echo("
                <th>Nazwisko</th>
                <th>Tytuł</th>
                <th>Usuń</th>
                ");
                while($row=mysqli_fetch_assoc($result)){
                    echo("<tr>");
                    echo("<td>");
                    echo($row['name']);
                    echo("</td>");
                    echo("<td>");
                    echo($row['tytul']);
                    echo("</td>");
                    echo("<td>");
                    echo('
                    <form action="delete.php" method="post">
                    <input type="text" style="display: none" value="'.$row["id_autor_tytul"].'" name="id_del" id="">
                    <input type="submit" value="X">
                    </form>');
                    echo("</td>");
                    echo("</tr>");
                }
                echo("</table>");
            ?>
        </div>
        <div class="item d">
            <div class="logon">
                <form action="logon.php" method="post">
                    <input class="wyloguj" type="submit" value="wyloguj">
                </form>
            </div>
        </div>
    </div>
</body>
<script src="main.js"></script>
</html>