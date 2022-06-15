<!DOCTYPE html>
<html lang="hr">
<head>
    <title>RP.ONLINE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!--Ukljucivanje headera-->
    <?php include 'navigation.php'?>
    
    <?php
        include 'connect.php';
        define('UPLPATH', 'pictures/');
    ?>
    <main>
        <section>
            <header><a class="href" href="kategorija.php?id=sport">Sport</a></header>
            <?php
                $query = "SELECT * FROM platnjakProjekt WHERE arhiva = 0 AND kategorija ='sport' LIMIT 3";
                $result = mysqli_query($dbc, $query);
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
            ?> 
        </section>

        <section>
            <header><a  class="href" href="kategorija.php?id=Politik">Politik</a></header>
            <?php
                $query = "SELECT * FROM platnjakProjekt WHERE arhiva = 0 AND kategorija ='politik' LIMIT 3";
                $result = mysqli_query($dbc, $query);
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
            ?> 
        </section>

        <?php
            mysqli_close($dbc);
        ?>
        
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