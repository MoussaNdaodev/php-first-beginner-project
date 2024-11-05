<?php
session_start();
include 'header.php';
include 'timer.php';
$_SESSION['compteurPoint2'] = 0;
    if(isset($_POST['boutton'])){
        $message = ' <div class="alert bg-danger py-1 m-0 " style="width: 300px;" >
        <p class="text-light p-0 m-0">Veullez saisir tous les champs svp</p>
        </div>';
        if(isset($_POST['question1']) && $_POST['question1'] != "" && $_POST['question1'] != NULL){
            $_SESSION['reponse'] = $_POST['question1'];
            if($_POST['question1'] == 'src = "monScript.js"'){
                $_SESSION['compteurPoint2'] = 2;
                $_SESSION['message2'] = 'Vous avez trouvé cette réponse'.'   +('."<b>2</b>".')';
            }else{
                $_SESSION['compteurPoint2'] = 0;
                $_SESSION['message2'] = 'Dommage ! la réponse est src = "monScript.js" ';
            }
            $_SESSION['note'] = $_SESSION['compteurPoint1'] + $_SESSION['compteurPoint2'] ;
            header('location:question3.php');
        }else{
            $_SESSION['compteurPoint2'] = 0;
            $message;
            $_POST['boutton'] = NULL;
        }
    }else{
        $_SESSION['compteurPoint2'] = 0;
        $_SESSION['note'] = $_SESSION['compteurPoint1'] + 0;
        $_SESSION['message2'] = 'Dommage ! la réponse est src = "monScript.js" ';
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
<form action="question2.php" method="post">
<div class="container bg-white rounded-3 my-5 py-3">
        <div class="row">
            <div class="col">
            <?php if(isset($message)){echo $message ;}?>
                <h1 class="h6" style="font-weight: bold;">
                    2. Quelle est la syntaxe correcte pour reférencer un script externe appellé <i>monScript</i>. je charge une page ? 
                </h1>
                <div class="form-check  mx-4">
                    <input class="form-check-input" type="radio" name="question1" value='src = "monScript.js"' id="question">
                    <label class="form-check-label" for="question" >
                        src = "monScript.js"
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="question1" value='link = "monScript.js"' id="question">
                    <label class="form-check-label" for="question" >
                        link = "monScript.js"
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="question1" value='name = "monScript.js"' id="question">
                    <label class="form-check-label" for="question" >
                        name = "monScript.js"
                    </label>
                </div>
                <div class="form-check mx-4">
                    <input class="form-check-input" type="radio" name="question1" value='href = "monScript.js"' id="question">
                    <label class="form-check-label" for="question" >
                        href = "monScript.js"
                    </label>
                </div>
                <div class="form-check  mx-4">
                    <input class="form-check-input" type="radio" name="question1" value="Aucune des réponses" id="question">
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