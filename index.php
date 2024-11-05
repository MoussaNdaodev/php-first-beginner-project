<?php
session_start();
include 'header.php';
    if(isset($_POST['boutton'])){
      $message = ' <div class="alert bg-danger py-1 m-0 " style="width: 300px;" >
        <p class="text-light p-0 m-0">Veullez saisir tous les champs svp</p>
        </div>';
      if(isset($_POST['nom']) && $_POST['nom'] !== ""){
        $_SESSION['nom'] = $_POST['nom'];
      }else{
        $_POST['boutton'] = NULL;
        $message;
      }
      if(isset($_POST['prenom']) && $_POST['prenom'] !== "") {
        $_SESSION['prenom'] = $_POST['prenom'];
      }else{
        $_POST['boutton'] = NULL;
        $message;
      }
      if(isset($_POST['metier']) && $_POST['metier'] !== "") {
        $_SESSION['metier'] = $_POST['metier'];
        header('location:question1.php');
      }else{
        $_POST['boutton'] = NULL;
        $message;
      }
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
    <div class="container my-5 rounded-" style="background-color: white;">
        <h1 class="text-center p-5 text-primary" style="font-family: Young Serif;">Test de QCM pour les Apprenenant</h1>
        <div class="row">
            <div class="col m-5 px-5">
                <form action="index.php" method="post">
                    <div class="mb-3">
                       
                        <?php if(isset($message))  echo " $message "; ?>
                      <label for="nom" class="form-label">Nom</label>
                      <input type="text" class="form-control"  name="nom" id="nom" >
                    </div>
                    <div class="mb-3">
                      <label for="prenom" class="form-label">Prenom</label>
                      <input type="text" class="form-control"  name="prenom" id="prenom">
                    </div>
                    <div class="mb-3">
                      <label for="metier" class="form-label">Métier</label>
                      <input type="text" class="form-control"  name="metier" id="metier">
                    </div>
                    <p class="text-center"><button type="submit" name="boutton" class="btn btn-outline-primary py-2 px-5">COMMENCER</button></p>
                  </form>
            </div>
        </div>
            
    </div>
</body>
</html>