<?php
session_start();
include 'header.php';
include 'timer.php';
$_SESSION['compteurPoint9'] = 0;
    if(isset($_POST['boutton'])){
        $message = ' <div class="alert bg-danger py-1 m-0 " style="width: 300px;" >
        <p class="text-light p-0 m-0">Veullez saisir tous les champs svp</p>
        </div>';
        if(isset($_POST['question7']) && $_POST['question7'] != "" && $_POST['question7'] != NULL){
            $_SESSION['reponse'] = $_POST['question7'];
            if($_POST['question7'] == "true"){
                $_SESSION['compteurPoint9'] = 2;
                $_SESSION['message9'] = 'Vous avez trouvé cette réponse'.'   +('."<b>2</b>".')';
            }else{
                $_SESSION['compteurPoint9'] = 0;
                $_SESSION['message9'] = 'Dommage ! la réponse est true';
            }
            $_SESSION['note'] = $_SESSION['compteurPoint1'] + $_SESSION['compteurPoint2'] + $_SESSION['compteurPoint3'] + $_SESSION['compteurPoint4'] + $_SESSION['compteurPoint5'] + $_SESSION['compteurPoint6'] + $_SESSION['compteurPoint7'] + $_SESSION['compteurPoint8'] + $_SESSION['compteurPoint9'] ;
            header('location:question10.php');
        }else{
            $_SESSION['compteurPoint9'] = 0;
            $_SESSION['message9'] = 'Dommage ! la réponse est true';
            $message;
            $_POST['boutton'] = NULL;
        }
    }else{
        $_SESSION['compteurPoint9'] = 0;
        $_SESSION['note'] = $_SESSION['compteurPoint1'] + $_SESSION['compteurPoint2'] + $_SESSION['compteurPoint3'] + $_SESSION['compteurPoint4'] + $_SESSION['compteurPoint5'] + $_SESSION['compteurPoint6'] + $_SESSION['compteurPoint7'] + $_SESSION['compteurPoint8'] + 0 ;
        $_SESSION['message9'] = 'Dommage ! la réponse est true';
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
<form action="question9.php" method="post">
    <div class="container bg-white rounded-3 my-5 py-3">
    <div class="row">
            <div class="col">
            <?php if(isset($message)){echo $message ;}?>
                <h1 class="h6" style="font-weight: bold;">
                    9. Que renvoie l'exécution du code alert(4 >= 4 && (2 > 3 || (6 % 3 < 1 ))) ; ? 
                </h1>
                <div class="form-check  mx-4">
                    <input class="form-check-input" type="radio" name="question7" value="erreur" id="question">
                    <label class="form-check-label" for="question" >
                        erreur
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="question7" value="undefined" id="question">
                    <label class="form-check-label" for="question" >
                        undefined
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="question7" value="true" id="question">
                    <label class="form-check-label" for="question" >
                        true
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="question7" value="false" id="question">
                    <label class="form-check-label" for="question" >
                        false
                    </label>
                </div>
                <div class="form-check  mx-4">
                    <input class="form-check-input" type="radio" name="question7" value="Aucune des réponses" id="question">
                    <label class="form-check-label" for="question" >
                        Aucune des reponses
                    </label>
                </div>
                
            </div>
        </div>
        <p class="text-center"><button type="submit" name="boutton" class="btn btn-outline-primary py-2 px-5">QUESTION SUIVANTES</button></p>
    </div>
</form>
</body>
</html>