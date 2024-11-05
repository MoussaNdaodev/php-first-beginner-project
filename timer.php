<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">

</head>
<body>
    <div id="timer" class="alert bg-danger text-white mx-3 my-5" style="font-weight: bold; font-size: 30px;"></div>
    <script>
        const departMinutes = 1;
        let temps = departMinutes * 60
        const timerElement = document.getElementById("timer")
        setInterval(() => {
        let minutes = parseInt(temps / 60, 10)
        let secondes = parseInt(temps % 60, 10)

        minutes = minutes < 10 ? "0" + minutes : minutes
        secondes = secondes < 10 ? "0" + secondes : secondes

        timerElement.innerText = `${minutes}:${secondes}`
        temps = temps <= 0 ? 0 : temps - 1
        if(temps == 0){
            window.location.href = "Resultat.php";
        }
        }, 1000)
    </script>
</body>
</html>