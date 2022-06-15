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
        if (isset($_SESSION['$username']) && $_SESSION['$level'] == 1) {
            include 'connect.php';
            define('UPLPATH', 'pictures/');

            echo '<p class="administration" >Bok ' . $_SESSION['$username'] . '! Uspješno ste prijavljeni.</p>';

            $query = "SELECT * FROM platnjakProjekt";
            $result = mysqli_query($dbc, $query);
            $maxBrojac = mysqli_num_rows($result);
            $brojac = 0;
            while($row = mysqli_fetch_array($result)) {
                $brojac += 1;
                echo '<main>';
                echo '<form enctype="multipart/form-data" action="deleteUpdate.php" method="POST">
                        <div class="form-item">
                            <label for="title">Naslov vjesti:</label>
                            <div class="form-field">
                                <input type="text" name="title" class="form-field-textual" value="'.$row['naslov'].'">
                            </div>
                        </div>

                        <div class="form-item">
                                <label for="about">Kratki sadržaj vijesti (do 100 znakova):</label>
                            <div class="form-field">
                                <textarea name="about" id="" cols="40" rows="10" class="form-field-textual">'.$row['sazetak'].'</textarea>
                            </div>
                        </div>

                        <div class="form-item">
                            <label for="content">Sadržaj vijesti:</label>
                            <div class="form-field">
                                <textarea name="content" id="" cols="40" rows="10" class="form-field-textual">'.$row['tekst'].'</textarea>
                            </div>
                        </div>

                        <div class="form-item">
                            <label for="pphoto">Slika:</label>
                            <div class="form-field">
                                <input type="file" class="input-text" id="pphoto" value="'.$row['slika'].'" name="pphoto" required/> <br><img src="' . UPLPATH . $row['slika'] . '" width=100px>
                            </div>
                        </div>

                        <div class="form-item">
                            <label for="category">Kategorija vijesti:</label>
                            <div class="form-field">
                                <select name="category" id="" class="form-field-textual" value="'.$row['kategorija'].'">
                                    <option value="sport">Sport</option>
                                    <option value="kultura">Kultura</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-item">
                            <label>Spremiti u arhivu:
                            <div class="form-field">';
                                if($row['arhiva'] == 0) {
                                    echo '<input type="checkbox" name="archive" id="archive"/>Arhiviraj?';
                                } else {
                                    echo '<input type="checkbox" name="archive" id="archive" checked/> Arhiviraj?';
                                }
                                echo '</div>
                                </label>
                            </div>
                        </div>

                        <div class="form-item">
                            <input type="hidden" name="id" class="form-field-textual" value="'.$row['id'].'">
                            <button type="reset" value="Poništi">Poništi</button>
                            <button type="submit" name="update" value="Prihvati"> Izmjeni</button>
                            <button type="submit" name="delete" value="Izbriši">Izbriši</button>
                        </div>
                    </form>';
                if($brojac != $maxBrojac){
                    echo '</main><br><hr><hr><hr><br>';
                }
                else{
                    echo '</main><br><br>';
                }
            }
            // Pokaži poruku da je korisnik uspješno prijavljen, ali nije administrator
        }
        else if (isset($_SESSION['$username']) && $_SESSION['$level'] == 0) {
            echo '<label class="signIN linkRegistracija author"><b>Bok ' . $_SESSION['$username'] . '! Uspješno ste prijavljeni, ali niste administrator.</b></label>';
        } 
        else {
            
            echo '<label class="signIN linkRegistracija"><b>Niste se uspješno prijavili. Pokšajte ponovo:</b></label>';
            echo'<div class="signIN linkRegistracija"><a href="login.php"">OVDJE</a></div>';
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