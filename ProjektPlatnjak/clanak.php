<!DOCTYPE html>
<html lang="hr">
<head>
    <title>RP.ONLINE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!--Ukljucivanje headera-->
    <?php include 'navigation.php'?>
    
    <main>
    <section>
        <?php
            $clanak = $_GET['id'];
            include 'connect.php';
            define('UPLPATH', 'pictures/');
            $query = "SELECT * FROM platnjakProjekt WHERE id = $clanak";
            $result = mysqli_query($dbc, $query);
            while($row = mysqli_fetch_array($result)) {
                echo'<header class="headerSportPolitik">'.ucfirst($row['kategorija']).'</header>';
                echo'<article class="articleSportPolitik">';
                    echo '<h1>';
                    echo $row['naslov'];
                    echo '</h1>';

                    echo '<p class="dateSportPolitik">'.$row['datum'].'</p>';

                    echo '<img src="' . UPLPATH . $row['slika'] . '">';

                    echo '<p class="clanakSportPolitik clanakIndex">';
                        echo $row['sazetak'];
                    echo '</p>';

                    echo '<p class="clanakSportPolitik">';
                        echo $row['tekst'];
                    echo '</p>';
                echo '</article>';
            }
            mysqli_close($dbc);
        ?>
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