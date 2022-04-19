<?php 

$name=strip_tags($_POST['nom']);
$surname=strip_tags($_POST['pré']);
$numsan=strip_tags($_POST['numsan']);
settype($numsan,"int");
$adr=strip_tags($_POST['@']);
$type=strip_tags($_POST['liste']);
$tab=["Viande","Poulet","Escalope"];
$t=$tab[$type];
$cin=$_FILES['fichier'];

if (isset($cin)){
    if (!file_exists(__DIR__.'/upload/'.$cin['name'])){
    move_uploaded_file($cin["tmp_name"],__DIR__.'/upload/'.uniqid().$cin["name"]);
}
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recapitulation des commandes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

 <style>   body{
    text-align: center;
    
}

attribut{
    color: RGBA(195,53,43,1) ;text-decoration: underline;
}

h1{
    box-shadow: 3px 1px #FFF2E6;
    color: #D3212D;
}


</style>
</head>
<body >
<container> 
<br><br>
<h1 >Commande du client : </h1>
    <br><br><br><br> 
<ul>
    <li><attribut> Nom du client :</attribut>  <?php echo("<br><br>".$name."<br><br>"); ?></li>
    <li><attribut>Prénom du client :  </attribut> <?php echo("<br><br>".$surname."<br><br>"); ?></li>
    <li><attribut>Adresse du client :</attribut>  <?php echo("<br><br>".$adr."<br><br>"); ?></li>
    <li><attribut>Nombre de Sandwitchs : </attribut> <?php echo("<br><br>".$numsan."<br><br>"); ?></li>
    <li><attribut>Ingrédients suppléments : <br><br></attribut><br> <?php
    if (!empty($_POST['include'])) 
        {
        foreach($_POST['include'] as $valeur)
        {echo $valeur ."<br><br>";};}
        else{
    echo("Il n'ya pas d'autres ingrédients choisis ! ") ;}?>
</li>
    <li><attribut>Type du Sandwitch: </attribut> <?php echo("<br><br>".$t."<br><br>"); ?></li>
</ul>
<br>

<div class="container1 shadow p-3 mb-5 bg-body rounded" >
<h3>Le prix des sandwitchs est : </h3>
<h4><?php 
    if ($numsan>10){
        $p=$numsan*4*0.9;
        echo($p);
    }
    else{
        $p=$numsan*4;
        echo($p);
    }
?></h4>
</div>
</container>  
</body>
</html>