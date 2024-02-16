<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Rich Content Website</title>
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
        <h2>Zeichencodenummern der Operatoren</h2>
        <table>
            <thead>
                <tr>
                    <th>Zeichen</th>
                    <th>Entität hexadezimal</th>
                    <th>Entität dezimal</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>¬</td>
                    <td>&amp;#x00AC;</td>
                    <td>&amp#172;</td>
                </tr>
                <tr>
                    <td>∧</td>
                    <td>&amp;#x2227;</td>
                    <td>&amp;#8743;</td>
                </tr>
                <tr>
                    <td>∨</td>
                    <td>&amp;#x2228;</td>
                    <td>&amp;#8744;</td>
                </tr>
                <tr>
                    <td>⊻</td>
                    <td>&amp;#x22BB;</td>
                    <td>&amp;#8883;</td>
                </tr>
                <tr>
                    <td>=</td>
                    <td>&amp;#x003D;</td>
                    <td>&amp;#61;</td>
                </tr>
                <tr>
                    <td>≠</td>
                    <td>&amp;#x2260;</td>
                    <td>&amp;#8800;</td>
                </tr>
                <tr>
                    <td>≤</td>
                    <td>&amp;#x2264;</td>
                    <td>&amp;#8804;</td>
                </tr>
                <tr>
                    <td>≥</td>
                    <td>&amp;#x2265;</td>
                    <td>&amp;#8805;</td>
                </tr>
                <tr>
                    <td>⇒</td>
                    <td>&amp;#x21D2;</td>
                    <td>&amp;#8658;</td>
                </tr>
                <tr>
                    <td>⇔</td>
                    <td>&amp;#x21D4;</td>
                    <td>&amp;#8660;</td>
                </tr>
            </tbody>
        </table>



        <h2> Vergleichsausdruck</h2>

        <div class="expression">

            (A . B) + (C + D) ≤ (E ⇒ F)

        </div>



        <h2> logischer Ausdruck</h2>

        <div class="expression">

            (P ∧ Q) ∨ ( ¬R + S) ⇒ (T ≠ U)

        </div>




        <a href="index.php">Startseite</a>

    </section>
    <footer>
        <?php include "footer.html" ?>
    </footer>

</body>

</html>