<?php
$alumnos = array("Josep", "Pere", "Pau", "Jordi", "Joan", "Teo", "Ferran", "Pol");
?>

<!DOCTYPE html>
<html lang="en">
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
<body>

<h1>Alumnos</h1>
    <ul>
        <?php
        foreach ($alumnos as $alumne){
            echo "<li>" . $alumne . "</li>";
        }
        ?>
    </ul>
</body>
</head>

<?php
echo count($alumnos)
?>
</html>
