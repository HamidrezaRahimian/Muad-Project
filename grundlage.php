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


        <h2>Grundlagen</h2>
        <ul class="listofdata">
            <li class="eachlist"> <strong>Ein Bit</strong>
                <p class="textoflist"><blockquote cite="https://www.ionos.de/digitalguide/websites/web-entwicklung/was-ist-ein-bit/">
                    Bit“ steht für binary digit und ist die kleinste binäre Informationseinheit. Damit ist sie die Basis für alle größeren Dateneinheiten der Digitaltechnik. Kleiner als Bit geht nicht, denn ein Bit kann entweder den Zustand 1 oder 0 abbilden.
                </blockquote>
            </li>
            <li class="eachlist"><strong>Ein Byte</strong>
                <p class="textoflist">Besteht aus 8 Bits und repräsentiert grundlegende Dateneinheiten in der digitalen
                    Welt, wie Buchstaben oder Zahlen. Die Kombination von Bytes ermöglicht die Speicherung und
                    Übertragung von Daten in unterschiedlichen Größenordnungen, von Kilobytes bis zu Gigabytes.</p>
            </li>
            <li class="eachlist"><strong>Analog:</strong>
                <p class="textoflist">Kontinuierliche Darstellung von Daten durch ununterbrochene, glatte Wellenformen.
                    Analoge Signale variieren innerhalb eines stetigen Bereichs und finden sich beispielsweise in
                    analogen Audiosignalen oder Spannungen.</p>
            </li>
            <li class="eachlist"><strong>Digital:</strong>
                <p class="textoflist">Diskrete Darstellung von Daten mithilfe binärer Zahlen (0 und 1), die in diskreten
                    Impulsen oder Schaltungen repräsentiert werden. Die digitale Signalverarbeitung ermöglicht präzise
                    und zuverlässige Datenverarbeitung in Computern und anderen elektronischen Geräten, indem
                    Informationen in klar definierten Zuständen codiert werden.</p>
            </li>
        </ul>



        <a href="index.php">Startseite</a>
    </section>

    <footer>
        <?php include "footer.html" ?>
    </footer>

</body>

</html>