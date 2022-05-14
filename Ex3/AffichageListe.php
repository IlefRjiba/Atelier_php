
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des taches</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link rel="stylesheet" href="format.css">
    <style> 
    h1 {
        padding: 50px;
    }
    </style>
</head>
<body>

<h1>Voici la liste des notes : </h1>

<br><br><br>
<div class="row">
    
        <?php
    
    
        session_start();
        for ($i = 0; $i < 50; $i++) {
            if (!isset($_SESSION["titre{$i}"]) && isset($_POST['titre'])) {
                $_SESSION["titre{$i}"] = $_POST['titre'];
                $_SESSION["comment{$i}"] = $_POST['comment'];
                // $_SESSION["date{$i}"]=$_POST['date'] ;
                break;
            }
        }
        for ($i = 0; $i < 50; $i++) {
            $d=date("l j F Y à H:i", getlastmod());
            $j = $i + 1 ;
            if (isset($_SESSION["titre{$i}"])) {
    
                echo " <div class=\"card\" style=\"width: 30%;\">
                <div class=\"card-body\">
                  <h5 class=\"card-title\">C'est la note N° $j</h5>
                  <br>
                  <h6 class=\"card-subtitle mb-2 text-muted\">{$_SESSION["titre{$i}"]}</u></font></h3><p>{$_SESSION["comment{$i}"]}</h6><br><br>
                <p class=\"date\"> Dernière modification : <br> $d </p>
                <br><br>
                  <br>
                
                </div>
              </div> " ;
                
            
    
            }
        };
    
        ?>
</div>


<br><br>
<button class="btn btn-outline-secondary" id="submit"><a class="redirect" href="créer_notes.php">Ajouter une note</a></button>

<br><br><br>
</body>
</html>