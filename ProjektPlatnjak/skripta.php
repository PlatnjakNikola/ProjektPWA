<!DOCTYPE html>
<html lang="hr">
<head>
    <title>RP.ONLINE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!--Ukljucivanje headera-->
    <?php include 'navigation.php'?>

    <!-- insert to database-->
    <?php include 'insertToDatabase.php';?>

    <main>
        <section role="main">
            <header class="headerSportPolitik">
                <?php
                   echo ucfirst($category);
                ?>
            </header>
            <article class="articleSportPolitik">
                <h1 class="title">
                    <?php
                        echo strtoupper($title);
                    ?>
                </h1>
                <p class ="author">AUTOR:</p>
                <p class ="objavljeno">OBJAVLJENO:</p>
            </article>

            <article class="articleSportPolitik">
                <?php
                    echo "<img src='pictures/$image'";
                ?>
            </article>

            <aritcle class="articleSportPolitik">
                <p class="clanakSportPolitik clanakIndex">
                    <?php
                        echo $about;
                    ?>
                </p>
            </aritcle>

            <aritcle class="articleSportPolitik">
                <p class="clanakSportPolitik">
                    <?php
                    echo $content;
                    ?>
                </p>
            </aritcle>
        </section>
    </main>
    <footer  class="loginFooter">
        <p>
            <span>Nikola Platnjak</span>
            <span>nplatnjak@tvz.hr</span>
            <span>2022.</span>
        </p>
    </footer>
</body>
</html>



