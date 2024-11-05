<?php
session_start();
include 'header.php';
if(isset($_POST['boutton'])){
    $_SESSION = [];
    header('location:index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Young+Serif&display=swap" rel="stylesheet">
</head>
<body style="background-color:#287271;">
<form action="" method="post">
<div class="container bg-white rounded-3 my-5 py-3">
        <h1 class="text-center text-primary py-3" style="font-family: Young Serif;">Voici les résultats du test</h1>
        <br>
        <div class="row">
            <div class="col">
                <h1 class="h6" style="font-weight: bold;">
                    1. Quels élément HTML permet d'intégrer du JavaScript dans une page ? 
                </h1>
                <p class="text-success">
                    <?php if(isset($_SESSION['message'])){echo $_SESSION['message'];}  ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="h6" style="font-weight: bold;">
                    2. Quelle est la syntaxe correcte pour reférencer un script externe appellé <i>monScript</i>. je charge une page ? 
                </h1>
                <p class="text-success">
                    <?php if(isset($_SESSION['message2'])){echo $_SESSION['message2'];} ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="h6" style="font-weight: bold;">
                    3. Ou insere t-on du JavaScript (colle ou lien ) dans une page ? 
                </h1>
                <p class="text-success">
                    <?php if(isset($_SESSION['message3'])){echo $_SESSION['message3'];}  ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="h6" style="font-weight: bold;">
                    4. Comment ajouter un commentaire en JavaScript ? 
                </h1>
                <p class="text-success">
                    <?php if(isset($_SESSION['message4'])){echo $_SESSION['message4'];}  ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="h6" style="font-weight: bold;">
                    5. En JavaScript, comment déclarer une variable <i>maVariable</i> pour stocker une valeur de type <i>number</i> ? 
                </h1>
                <p class="text-success">
                    <?php if(isset($_SESSION['message5'])){echo $_SESSION['message5'];}  ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="h6" style="font-weight: bold;">
                    6. Que renvoie l'exécution du code <br> message ="bonjour" ; <br> alert(typeof message) ;? 
                </h1>
                <p class="text-success">
                    <?php if(isset($_SESSION['message6'])){echo $_SESSION['message6'];}  ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="h6" style="font-weight: bold;">
                    7. Qu'affiche le code alert("10" + "5") ?; 
                </h1>
                <p class="text-success">
                    <?php if(isset($_SESSION['message7'])){echo $_SESSION['message7'];} ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="h6" style="font-weight: bold;">
                    8. Qu'affiche le code isNAN("20")?; 
                </h1>
                <p class="text-success">
                    <?php if(isset($_SESSION['message8'])){echo $_SESSION['message8'];}  ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="h6" style="font-weight: bold;">
                    9. Que renvoie l'exécution du code alert(4 >= 4 && (2 > 3 || (6 % 3 < 1 ))) ; ? 
                </h1>
                <p class="text-success">
                    <?php if(isset($_SESSION['message9'])){echo $_SESSION['message9'];}  ?>
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col">
                <h1 class="h6" style="font-weight: bold;">
                    10. Que signifie l'acronyme AJAX? 
                </h1>
                <p class="text-success">
                    <?php if(isset($_SESSION['message10'])){echo $_SESSION['message10'];} ?>
                </p>
            </div>
        </div>
        <p class="text-center"><button type="submit" name="boutton" class="btn btn-outline-primary py-2 px-5">DECONNEXION</button></p>
    </div>
</form>
    
    
</body>
</html>