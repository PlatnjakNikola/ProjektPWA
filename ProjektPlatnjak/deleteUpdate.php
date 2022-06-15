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
        if(isset($_POST['delete'])){
            $id = $_POST['id'];
            $query = "DELETE FROM platnjakProjekt WHERE id = $id ";
            $result = mysqli_query($dbc, $query);
        }
        else if(isset($_POST['update'])){
            define('UPLPATH', 'pictures/');
            $picture = $_FILES['pphoto']['name'];
            $title=$_POST['title'];
            $about=$_POST['about'];
            $content=$_POST['content'];
            $category=$_POST['category'];
            if(isset($_POST['archive'])){
                $archive=1;
            }else{
                $archive=0;
            }
            $target_dir = 'pictures/'.$picture;
            move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);
            $id = $_POST['id'];
            $query = "UPDATE platnjakProjekt SET naslov = '$title', sazetak = '$about', tekst = '$content',
            slika = '$picture', kategorija = '$category', arhiva = '$archive' WHERE id=$id ";
            $result = mysqli_query($dbc, $query);
            if($result)
                echo '<div class="mission"><img src="pictures/missionAccomplished.gif"></div>';
            mysqli_close($dbc);
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