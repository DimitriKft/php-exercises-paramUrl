<?php
echo "test";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<p>Bonjour <?php echo $_GET['prenom'] . ' ' . $_GET['nom'] . ' agé de '. $_GET['age']. ' ans' ?> !</p>
    <?php 
    if ($_GET['age'] == "") {
        echo "la valeur de l'age na pas été récupéré";
    } else {
        echo "<p>".$_GET['age']."</p>";
    }
    ?>
</body>
</html>