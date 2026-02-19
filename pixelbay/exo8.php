<?php
$commande = [
    [
        "nom" => "Cyber Race",
        "prix_unitaire" => 49.99,
        "quantite" => 2
    ],

    [
        "nom" => "Manette Pro",
        "prix_unitaire" => 59.99,
        "quantite" => 1
    ],

    [
        "nom" => "Carte Mémoire 128Go",
        "prix_unitaire" => 24.99,
        "quantite" => 3
    ]
];
$tva = 20;
$prix = $commande['prix_unitiare'];
$quantite = $commande['quantite'];

function calculerTTC($prixHT, $tva)
{
    return $prixHT * (1 + $tva / 100);
}


foreach ($commande as $a => $b) {

  echo "$a . $b";
    echo ($a) . " : " . "<br>";
    echo($b['prix_unitaire']);
    echo "<br>";
}




calculerTTC($prixHT, $tva)
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <main>
        <table>

        </table>
    </main>
</body>

</html>