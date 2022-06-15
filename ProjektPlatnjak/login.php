<!DOCTYPE html>
<html lang="hr">
<head>
    <title>RP.ONLINE</title>
    <link rel="stylesheet" type="text/css" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.19.1/jquery.validate.min.js"></script>
    <script type="text/javascript"  src="js/loginValidation.js"></script> 
</head>
<body>
    <!--Ukljucivanje headera-->
    <?php include 'navigation.php'?>

    <main >
        <form id ="prijava"name ="prijava" action="administracija.php" method="post">
            <label class="signIN" for="username"><b>Korisnicko ime</b></label>
            <input class="login" type="text" placeholder="Unesite korisnicko ime" id="username" name="username">

            <label class="signIN" for="password"><b>Lozinka</b></label>
            <input class="login" type="password" placeholder="Unesite lozinku" id="password" name="password">

            <button class="login" type="submit" name="submitLogin">Login</button>
            <br>
            <br>
            <a class="registerPicture"href="sign_in.php"><img class="signIN"src="pictures/register.png"></a>
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