<!DOCTYPE html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alexander Back-end template</title>
    <link rel="stylesheet" href="../style.css">
    <script src="./script.js" defer></script>
</head>

<body>

    <div id="container">
        <!-- Max 800px bred container-->

        <header>
            <!-- Logo och meny i headern -->
            <img src="../media/logo.svg" alt="Website logo" />
            <div id="logo">DenApp</div>

            <nav>
                <!-- Huvudmenyn -->
                <ul>
                    <li><a href="../home/">Home</a></li>
                    <li><a href="../projekt1/">Projekt 1</a></li>
                    <li><a href="../projekt2/">Projekt 2</a></li>
                    <li><a href="../rapport/">Rapport</a></li>
                </ul>
            </nav>
        </header>

        <!-- Sektionen omringar artiklar (eg. blogposts)-->
        <section>

            <article>
                <h1> Uppgift 1 </h1>
                <?php
                    /* Uppg 1 - Systemareorna och superglobals */
                    print("<p> Servern snurrar på port " . $_SERVER['REMOTE_PORT'] . ", som vanligt med https och apache");
                ?>
            </article>

            <article>
                <h1> Uppgift 2 </h1>
                <?php
                    /* Uppg 2 - Systemareorna och superglobals */
                    $datum = date("d.M.Y");
                    print("Dagens datum är " .$datum);
                    // Arrays
                    $veckodagar = array("Måndag", "Tisdag", "Onsdag", "Torsdag", "Fredag", "Lördag", "Söndag");
                    print("</p> Idag är det veckodag nummer: " . $veckodagar[date("4")] . "</p>");

                ?>
            </article>


            <!-- Artiklar placerar sig snyggt nedanför varann-->
            <article>
                <h2>Bloggen - Inlägg 1</h2>
                <p>Denapappas memoarer</p>
            </article>
            <div class="separator"></div>

            <article>
                <h2>Bloggen - Inlägg 2</h2>
                <p>Elcyklar och solkraft</p>
            </article>

        </section>

        <!-- Footern innehåller t.ex. somelänkar och kontaktuppg -->
        <footer>
            Made by Dennis<sup>&#169;</sup>
        </footer>

    </div>
</body>

</html>