<!doctype html>
<html lang="de" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="UTF-8">
    <title>Gästebuch</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<header>
    <?php include "header.html" ?>
</header>

<nav>
    <?php include "nav.html" ?>
</nav>

<section>
    <h2>Kontakt</h2>
    <div class="flex-container">




                <form method="post" action="form.php">
                    <label for="name">Name:</label>
                    <input type="text" name="name" id="name">
                        <br>
                    <label for="datum">Besucht am:</label><input type="date" name="datum" id="datum">

                        <br>
                    <label for="art"> Art:</label>
                    <select name="art" id="art"> <!-- 4 -->
                        <option value="Feedback">Feedback</option>
                        <option value="Frage">Frage</option>
                        <option value="Sonstiges">Sonstiges</option>
                    </select>
                    <br>
                    <label for="nachricht">Text:</label>
                    <textarea name="eintrag" id="nachricht" cols="30" rows="10"></textarea>

                        <br>
                    <button type="submit">Absenden</button>
                </form>
    </div>
        <?php
            if ($_SERVER["REQUEST_METHOD"] === "POST") {
                $schon_drin = "";
                $daten = "nix";
                $name = htmlspecialchars($_POST['name']);
                $datum = htmlspecialchars($_POST['datum']);
                $eintrag = htmlspecialchars($_POST['eintrag']);
                $art = htmlspecialchars($_POST["art"]);
                $user_info = array($name, $datum, $eintrag,$art);
                if (!empty($name) and !empty($datum) and !empty($eintrag) and !empty($art)) {
                    $daten = implode(";", $user_info) . "\r\n";
                    $zitate = file("Datei");
                    for ($i = 0; $i < count($zitate); $i++) {
                        if ($daten != $zitate[$i]) {
                            $schon_drin = false;
                        } else {
                            $schon_drin = true;
                        }

                    }
                    if (!$schon_drin) {
                        file_put_contents("Datei", $daten, FILE_APPEND);
                    } else {
                        echo "Bitte alle Felder ausfüllen" . "<br><br>";
                    }
                }
            }
        ?>

        <div class="flex-container">

            <details>
                <summary><Strong>Einträge</Strong></summary>
                <p><?php
                    $zitate = file("Datei");
                    for ($i = 0; $i < count($zitate); $i++) {
                        echo $i+1 . ": " . $zitate[$i] . "<br><br>";

                    }


                    ?></p>
            </details>


        </div>
</section>

<footer>
        <?php include "footer.html" ?>
</footer>

</body>
</html>