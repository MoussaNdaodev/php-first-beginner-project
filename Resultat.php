<?php
session_start();
include 'header.php';
if(isset($_POST['boutton'])){
    header('location:DetailsResultats.php');
}
// $_SESSION['note'] = ($_SESSION['compteurPoint10'] + $_SESSION['compteurPoint9'] + $_SESSION['compteurPoint8'] + $_SESSION['compteurPoint7'] + $_SESSION['compteurPoint6'] + $_SESSION['compteurPoint5'] + $_SESSION['compteurPoint4'] + $_SESSION['compteurPoint3'] + $_SESSION['compteurPoint2'] + $_SESSION['compteurPoint1']);
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
<div class="container bg-white rounded-3 my-5 py-3">
    <div class="row">
        <div class="col">
            <h1 class="text-center text-primary py-3" style="font-family: Young Serif;">
                <?php echo 'L apprennant'.' '.$_SESSION['prenom'].' '.$_SESSION['nom'].' a eu la note de '.$_SESSION['note'].'/20';  ?>
            </h1>
        </div>
    </div>
    <form action="" method="post">
    <p class="text-center"><button type="submit" name="boutton" class="btn btn-outline-primary py-2 px-5">EN SAVOIR PLUS</button></p>
    </form>
    
</div>    
</body>
</html>