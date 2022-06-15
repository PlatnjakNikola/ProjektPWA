<?php 
    include 'connect.php';
    if(isset($_POST['archive']))
        $archive=1;
    else
        $archive=0;

    $title = $_POST['title'];
    $about = $_POST['about'];
    $content = $_POST['content'];
    $image = $_FILES['pphoto']['name'];
    $category = $_POST['category'];
    $date = date('d.m.Y.');
    
    $target_dir = 'pictures/'.$image;
    move_uploaded_file($_FILES["pphoto"]["tmp_name"], $target_dir);
    $query = "INSERT INTO platnjakProjekt (datum, naslov, sazetak, tekst, slika, kategorija, arhiva ) 
        VALUES ('$date', '$title', '$about', '$content', '$image','$category', '$archive')";

    $result = mysqli_query($dbc, $query) or die('Error querying databese.');
    mysqli_close($dbc);
?>