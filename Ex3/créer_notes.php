

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Création de notes </title>

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

    <link rel="stylesheet" href="format.css">
</head>
<body>
  
<form action="" method="POST">
<h1>Ajout d'une note</h1>
Titre : <br><br>
<input type="text" name="titre" >     
<br><br>
Commentaire : <br><br>
<input type="text" name="comment" > 
<br><br>
<input class="btn btn-outline-secondary" type="submit" value="submit" name="btn" id="submit">
<br><br>
<a href="AffichageListe.php">Consulter la liste des taches à réaliser</a>
</form>

</body>
</html>

<?php
    session_start();
    for ($i = 0; $i < 50; $i++) {
        if (!isset($_SESSION["titre{$i}"]) && isset($_POST['titre'])) {
            $_SESSION["titre{$i}"] = $_POST['titre'];
            $_SESSION["comment{$i}"] = $_POST['comment'];
            break;
        }
    }
    // echo '<body><div style="display: flex; justify-content: center; align-items: center; flex-wrap: wrap;">';
    // for ($i = 0; $i < 50; $i++) {
    //     if (isset($_SESSION["titre{$i}"])) {
    //         echo "<div style='margin:5px; border:2px solid black;padding:1 10px;' name='{$_SESSION["titre{$i}"]}'>";
    //         echo "<h3> <font color= red><u> {$_SESSION["titre{$i}"]}</u></font></h3><p>{$_SESSION["comment{$i}"]} </p><br></div>";
    //     }
    // };
    ?>
