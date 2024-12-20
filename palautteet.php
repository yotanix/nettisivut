<!DOCTYPE html>
<html lang="fi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Palautteet - Daniil Jukarainen</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

    <header>
        <h1>Palautteet</h1>
    </header>

    <section>
        <h2>Tallennetut palautteet</h2>
        <?php
        // Tiedoston nimi, josta palautteet luetaan
        $palautetiedosto = "palautteet.txt";

        // Tarkista, onko tiedosto olemassa
        if (file_exists($palautetiedosto)) {
            // Lue tiedoston sisältö ja näytä se
            $sisalto = file_get_contents($palautetiedosto);
            echo "<pre>$sisalto</pre>";
        } else {
            echo "<p>Palautteita ei ole vielä tallennettu.</p>";
        }
        ?>
    </section>

    <footer>
        <p><a href="sivu.php">Palaa pääsivulle</a></p>
    </footer>

</body>
</html>
