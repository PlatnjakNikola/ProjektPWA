<!DOCTYPE html>
<html lang="hr">
<head>
    <title>RP.ONLINE</title>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script type="text/javascript"  src="js/signInValidation.js"></script> 
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <!--Ukljucivanje headera-->
    <?php include 'navigation.php'?>

    <main >
        <form name="registracija" action="registracija.php" method="POST">
            <h2>Sign Up</h2>
            <p>Popunite formu da bi ste se registrirali</p>
            <hr>
            <label class="signIN"for="ime"><b>Ime</b></label>
            <input class ="login"type="text" placeholder="Unesite ime" id ="ime" name="ime">

            <label class="signIN" for="prezime"><b>Prezime</b></label>
            <input class ="login" type="text" placeholder="Unesite prezime" id="prezime" name="prezime">

            <label class="signIN" for="username"><b>Korisnicko ime</b></label>
            <input class ="login" type="text" placeholder="Unesite korisnicko ime" id="username" name="username">

            <label  class="signIN"for="password"><b>Password</b></label>
            <input class ="login" type="password" placeholder="Unesite lozinku" id="password" name="password">

            <label class="signIN" for="passwordRepeat"><b>Repeat Password</b></label>
            <input class ="login" type="password" placeholder="Ponovite lozinku" id="passwordRepeat" name="passwordRepeat">

            <button type="submit">Registracija</button>
        </form>
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