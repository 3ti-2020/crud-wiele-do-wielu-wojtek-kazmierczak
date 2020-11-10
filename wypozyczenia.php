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
                <form action="wypozycz.php" method="post">
                    ID książki:
                    <input type="text" name="id" id=""><br>
                    Do kiedy chcesz wypożyczyć:
                    <input type="date" name="data" id="">
                    <input type="submit" value="Wypożycz">
                </form>
            </div>
        </div>

            

        <div class="item c">
        <div class="listaWypozyczen">
            <?php
                require_once("connect.php");
                $sql = "SELECT * FROM lib_autor, lib_autor_tytul, lib_tytul, lib_wypozyczenia 
                WHERE lib_autor.id_autor = lib_autor_tytul.id_autor
                AND lib_tytul.id_tytul = lib_autor_tytul.id_tytul
                AND lib_wypozyczenia.id_autor_tytul=lib_autor_tytul.id_autor_tytul";
                $result = mysqli_query($conn, $sql);

                echo("<table>");
                echo("
                <th>Nazwisko</th>
                <th>Tytuł</th>
                <th>Data wypożyczenia</th>
                <th>Data oddania</th>
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
                    echo($row['data_wypozyczenia']);
                    echo("</td>");
                    echo("<td>");
                    echo($row['data_oddania']);
                    echo("</td>");
                    echo("</tr>");
                }
                echo("</table>");
            ?>
        </div>
        <div class="listaKsiazek">
        <?php
                require_once("connect.php");
                $sql = "SELECT * FROM lib_autor, lib_autor_tytul, lib_tytul WHERE 
                lib_autor.id_autor = lib_autor_tytul.id_autor
                AND lib_tytul.id_tytul = lib_autor_tytul.id_tytul";
                $result = mysqli_query($conn, $sql);

                echo("<table>");
                echo("
                <th>ID Książki</th>
                <th>Nazwisko</th>
                <th>Tytuł</th>
                ");
                while($row=mysqli_fetch_assoc($result)){
                    echo("<tr>");
                    echo("<td>");
                    echo($row['id_autor_tytul']);
                    echo("</td>");
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

        </div>
        <div class="item d">
            <div class="logon">
                <form action="logon.php" method="post">
                    <input class="wyloguj" type="submit" value="wyloguj">
                </form>
            </div>
            <div class="dolLinki">
                <a href="index-admin.php" class="wypozyczenia">Panel admina</a>
            </div>
        </div>
    </div>
</body>
<script src="main.js"></script>
</html>