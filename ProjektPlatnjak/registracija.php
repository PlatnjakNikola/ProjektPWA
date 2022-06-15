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
        <?php 
            include 'connect.php';
            $ime = $_POST['ime']; 
            $prezime = $_POST['prezime']; 
            $username = $_POST['username']; 
            $lozinka = $_POST['password']; 
            $hashed_password = password_hash($lozinka, CRYPT_BLOWFISH); 
            $razina = 0; $registriranKorisnik = ''; 
            //Provjera postoji li u bazi već korisnik s tim korisničkim imenom 
            $sql = "SELECT korisnicko_ime FROM korisnik WHERE korisnicko_ime = ?"; 
            $stmt = mysqli_stmt_init($dbc); 
            if (mysqli_stmt_prepare($stmt, $sql)) { 
                mysqli_stmt_bind_param($stmt, 's', $username); 
                mysqli_stmt_execute($stmt); 
                mysqli_stmt_store_result($stmt); 
            } 
            if(mysqli_stmt_num_rows($stmt) > 0){ 
                echo'<label class="signIN linkRegistracija">Korisničko ime već postoji!</label>';
                echo'<div class="signIN div_goBack">
                        <a href="sign_in.php">
                            <img class="goBack"src="pictures/backToRegister.png">
                        </a>
                    </div>';
            }
            else{ 
                // Ako ne postoji korisnik s tim korisničkim imenom - Registracija korisnika u bazi pazeći na SQL injection 
                $sql = "INSERT INTO korisnik (ime, prezime,korisnicko_ime, lozinka, razina)VALUES (?, ?, ?, ?, ?)"; 
                $stmt = mysqli_stmt_init($dbc); 
                if (mysqli_stmt_prepare($stmt, $sql)) { 
                    mysqli_stmt_bind_param($stmt, 'ssssd', $ime, $prezime, $username, $hashed_password, $razina); 
                    mysqli_stmt_execute($stmt); 
                    echo '<label class="signIN linkRegistracija">Korisnik je uspješno registriran!</label>'; 
                }
                else{
                    echo'<label class="signIN linkRegistracija">Korisnik nije uspješno registriran!</label>';
                    echo'<div class="signIN div_goBack">
                            <a href="sign_in.php">
                                <img class="goBack"src="pictures/backToRegister.png">
                            </a>
                        </div>';
                }
            }
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