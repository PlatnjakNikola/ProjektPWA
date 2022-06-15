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
            session_start();
            
            
            include 'connect.php';
            define('UPLPATH', 'pictures/');
            
            if (isset($_POST['submitLogin'])) {
                
                // Provjera da li korisnik postoji u bazi uz zaštitu od SQL injectiona
                $prijavaImeKorisnika = $_POST['username'];
                $prijavaLozinkaKorisnika = $_POST['password'];

                $sql = "SELECT korisnicko_ime, lozinka, razina FROM korisnik WHERE korisnicko_ime = ?";
                $stmt = mysqli_stmt_init($dbc);
                if (mysqli_stmt_prepare($stmt, $sql)) {
                    mysqli_stmt_bind_param($stmt, 's', $prijavaImeKorisnika);
                    mysqli_stmt_execute($stmt);
                    mysqli_stmt_store_result($stmt);
                }
                mysqli_stmt_bind_result($stmt, $imeKorisnika, $lozinkaKorisnika, $levelKorisnika);
                mysqli_stmt_fetch($stmt);
                //Provjera lozinke
                if (password_verify($_POST['password'], $lozinkaKorisnika) && mysqli_stmt_num_rows($stmt) > 0) {
                    
                    //postavljanje session varijabli
                    
                    $_SESSION['$username'] = $imeKorisnika;
                    $_SESSION['$level'] = $levelKorisnika;
                    
                } 
                header("Location: administracija2.php");
                
            }           
        ?>
    
    <footer  class="loginFooter">
        <p>
            <span>Nikola Platnjak</span>
            <span>nplatnjak@tvz.hr</span>
            <span>2022.</span>
        </p>
    </footer>

    
    
</body>
</html>