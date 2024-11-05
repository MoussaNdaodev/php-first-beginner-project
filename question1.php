<?php
session_start();
include 'header.php';
include 'timer.php';
    if(isset($_POST['boutton'])){
        $message = ' <div class="alert bg-danger py-1 m-0 " style="width: 300px;" >
        <p class="text-light p-0 m-0">Veullez saisir tous les champs svp</p>
        </div>';
        $_SESSION['compteurPoint1'] = 0;
        if(isset($_POST['question']) && $_POST['question'] != "" && $_POST['question'] != NULL){
            $_SESSION['reponse'] = $_POST['question'];
            if($_POST['question'] == "< srcipt >"){
                $_SESSION['compteurPoint1'] = 2;
                $_SESSION['message'] = 'Vous avez trouvé cette réponse'.'   +('."<b>2</b>".')';
            }else{
                $_SESSION['compteurPoint1'] = 0;
                $_SESSION['message'] = 'Dommage ! la réponse est < srcipt > ';
            }
            $_SESSION['note'] = $_SESSION['compteurPoint1'];
            header('location:question2.php');
        }else{
            $_SESSION['compteurPoint1'] = 0;
            $message;
            $_POST['boutton'] = NULL;
        }
    }else{
        $_SESSION['compteurPoint1'] = 0;
        $_SESSION['note'] = 0;
        $_SESSION['message'] = 'Dommage ! la réponse est < srcipt > ';
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
<form action="question1.php" method="post">
<div class="container bg-white rounded-3 my-5 py-3">
        <h1 class="text-center text-primary py-3" style="font-family: Young Serif;">Bienvenue <?php  echo ($_SESSION['nom'].' '. $_SESSION['prenom']) ?> : Prêt pour le test !</h1>
        <br>
        <div class="row">
            <div class="col">
                <?php if(isset($message)){echo $message ;}?>
                <h1 class="h6" style="font-weight: bold;">
                    1. Quels élément HTML permet d'intégrer du JavaScript dans une page ? 
                </h1>
                <div class="form-check  mx-4">
                    <input class="form-check-input" type="radio" name="question" value="< ja >" id="question">
                    <label class="form-check-label" for="question" >
                      < ja >
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="question" value="< javascript >" id="question">
                    <label class="form-check-label" for="question" >
                        < javascript >
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="question" value="< srcipt >" id="question">
                    <label class="form-check-label" for="question" >
                        < srcipt >
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="question" value="< scripting>" id="question">
                    <label class="form-check-label" for="question" >
                        < scripting>
                    </label>
                </div>
                <div class="form-check  mx-4">
                    <input class="form-check-input" type="radio" name="question" value="Aucune des réponses" id="question">
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