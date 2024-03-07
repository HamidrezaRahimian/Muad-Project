<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Digitalisierung</title>
    <link rel="stylesheet" href="index.css">
    <link rel="icon" type="image/png" href="img/favicon.png">

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
        <p>
            Ein Vergleichsausdruck ist eine Konstruktion in der Programmierung, die dazu dient,
            zwei Werte oder Ausdrücke miteinander zu vergleichen und das Ergebnis dieses Vergleichs
            zu bestimmen. Typischerweise werden Vergleichsoperatoren wie "größer als" (>),
            "kleiner als" (<), "gleich" (==), "ungleich" (!=), "größer gleich" (>=) und "kleiner gleich"
                (<=) verwendet, um den Vergleich durchzuführen. Diese Ausdrücke werden oft in Bedingungen verwendet, um zu entscheiden, welche Aktionen in einem Programm ausgeführt werden sollen, abhängig von den Ergebnissen des Vergleichs. </p>

                    <div class="expression">

                        (A . B) + (C + D) ≤ (E ⇒ F)

                    </div>



                    <h2> logischer Ausdruck</h2>
                    <p>
                        in logischer Ausdruck ist ein Ausdruck in der Programmierung, der logische Operatoren
                        wie "und" (&&), "oder" (||) und "nicht" (!) verwendet, um die Logik von Bedingungen
                        oder Aussagen zu kombinieren. Diese Ausdrücke ermöglichen es, komplexe Bedingungen
                        zu formulieren, die aus mehreren Teilaussagen bestehen. Logische Ausdrücke werden
                        häufig in Verbindung mit Vergleichsausdrücken verwendet, um Bedingungen zu erstellen,
                        die auf mehreren Kriterien basieren. Sie spielen eine wichtige Rolle in der
                        Steuerung des Programmflusses und der Entscheidungsfindung während der Ausführung eines Programms.
                    </p>

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