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
                include 'connect.php';
                define('UPLPATH', 'pictures/');
                $kategorija = $_GET['id'];
                $query = "SELECT * FROM platnjakProjekt WHERE arhiva = 0 AND kategorija = '".$kategorija."'";
                $result = mysqli_query($dbc, $query);
                echo '<header><a class="href headerSportPolitik">'.ucfirst($kategorija).'</a></header>';
                while($row = mysqli_fetch_array($result)) {
                    
                    echo '<article>';
                        echo '<img src="' . UPLPATH . $row['slika'] . '">';
                        echo '<div class="textAside">';
                            echo '<h2>';
                                echo'<a href="clanak.php?id='.$row['id'].'">';
                                    echo ucfirst($row['naslov']);
                                echo '</a>';
                            echo '</h2>';

                            echo '<p>';
                                echo '<a href="clanak.php?id='.$row['id'].'">';
                                    echo ucfirst($row['sazetak']);
                                echo '</a>';
                            echo '</p>';
                        echo '</div>';
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



