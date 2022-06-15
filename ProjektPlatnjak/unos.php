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
        <form name="prijava" action="skripta.php" enctype="multipart/form-data" method="POST">
            <div class="form-item">
                
                <label for="title">Naslov vijesti</label>
                <div class="form-field">
                    <span id="porukaTitle" class="bojaPoruke"></span>
                    <input type="text" name="title" id="title" class="form-field-textual">
                </div>
            </div>
    
            <div class="form-item">
                
                <label for="about">Kratki sadrzaj vijesti (do 100 znakova)</label>
                <div class="form-field">
                <span id="porukaAbout" class="bojaPoruke"></span>
                    <textarea name="about" id="about" cols="30" rows="10" 
                            class="form-field-textual"></textarea>
                </div>
            </div>
    
            <div class="form-item">
                <label for="content">Sadrzaj vijesti</label>
                <div class="form-field">
                    <span id="porukaContent" class="bojaPoruke"></span>
                    <textarea name="content" id="content" cols="30" rows="10"
                            class="form-field-textual"></textarea>
                </div>
            </div>
    
    
            <div class="form-item">
                <label for="category">Kategorija vijesti</label>
                <div class="form-field">
                    <span id="porukaKategorija" class="bojaPoruke"></span>
                    <select name="category" id="category" class="form-field-textual">
                        <option value="" disabled selected>Odaberite</option>
                        <option value="sport">Sport</option>
                        <option value="Politik">Politik</option>
                    </select>
                </div>
            </div>

            <div class="form-item">
                <label for="pphoto">Slika: </label>
                <div class="form-field">
                    <span id="porukaSlika" class="bojaPoruke"></span>
                    <input type="file" accept="image/jpg,image/gif,image/webp,image/jpeg"
                            class="input-text pphoto" id="pphoto" name="pphoto"/>
                </div>
            </div>
    
            <div class="form-item">
                <label>Spremiti u arhivu:
                    <div class="form-field">
                        <input type="checkbox" name="archive">
                    </div>
                </label>
            </div>
    
            <div class="form-item">
                <button type="reset" value="Ponisti">Ponisti</button>
                <button type="submit" value="Prihvati" id="slanje">Prihvati</button>
            </div>
        </form>

        <!-- java script validacija -->
        <script type="text/javascript" src="js/validacija.js"></script>
        
    </main>
    <footer class="signIN">
        <p>
            <span>Nikola Platnjak</span>
            <span>nplatnjak@tvz.hr</span>
            <span>2022.</span>
        </p>
    </footer>
    
</body>
</html>