<!-- PHP Snack 1:
Creiamo un array 'matches' contenente altri array i quali rappresentano delle partite di
basket di un’ipotetica tappa del calendario. Ogni array della partita avrà una squadra di
casa e una squadra ospite, punti fatti dalla squadra di casa e punti fatti dalla squadra ospite.
Stampiamo a schermo tutte le partite con questo schema:
Olimpia Milano - Cantù | 55 - 60 -->

<?php
$matches = [
        [
            "SquadraCasa" => "Olimpia Milano",
            "SquadraOspite" => "Virtus Bologna",
            "PuntiCasa" => 120,
            "PuntiOspite" => 131
        ],
        [
            "SquadraCasa" => "Varese",
            "SquadraOspite" => "Pall. Cantù",
            "PuntiCasa" => 99,
            "PuntiOspite" => 102
        ],
        [
            "SquadraCasa" => "V.L. Pesaro",
            "SquadraOspite" => "Reyes Venezia",
            "PuntiCasa" => 110,
            "PuntiOspite" => 122
        ]
    ];
$lunghezza = count($matches);

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

  <?php for($i = 0 ; $i < $lunghezza; $i++){?>
    <h2><?php echo $matches[$i]["SquadraCasa"] ?></h2>

  <?php } ?>

</body>
</html>
