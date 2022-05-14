<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Questionnaire</title>
    <link href="node_modules/bootstrap/dist/css/bootstrap.css" rel="stylesheet">

<style>
    div{
        text-align: center;
    }

    body{
        margin: 10%;
        padding: 10%;
    }

    button{
      border-color: rgb(224, 0, 168) !important;
      color: rgb(224, 0, 168) !important;
    }

    button:hover {
    background-color: rgb(255, 228, 248) !important;
    color: rgb(224, 0, 168);
  }

  p{
    color: red;
    text-align: center;
    text-shadow: 2px 2px 4px lightgray ;
  }

</style>

</head>
<body>

<!-- <?php echo($_SERVER['PHP_SELF']) ?> -->

<div class="shadow-sm p-3 mb-5 bg-body rounded "> 
<form action="" method="post" >

<label> Décrivez votre satisfaction quant au cours de php ! </label>
<div class="form-check" class="shadow-sm p-3 mb-5 bg-body rounded">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
    <label class="form-check-label" for="flexRadioDefault1">
     Bon
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      Moyen
    </label>
  </div>
  <div class="form-check">
    <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
    <label class="form-check-label" for="flexRadioDefault2">
      Mauvais
    </label>
  </div>
  
  <br><br>
<button type="submit" class="btn btn-outline-danger" name="btn" >Valider</button>
</div>
</form>
</div>

<?php 

if(isset($_POST["btn"])){
  if (!$_COOKIE){
  setcookie("connexion","value",time()+2*60) ;
}
else {
  echo("<p>Vous avez déjà rempli ce formulaire !</p>"); };
}

?>  
</body>
</html>