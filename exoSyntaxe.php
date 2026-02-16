<?php


#1 créeation de variable 
//  $bleu = "Bleu";
//  $blanc = "Blanc";
//  $rouge = "Rouge";
//  $tiret = "-";

#1.1 affichage des variables v1
//echo  $bleu,"-", $blanc,"-", $rouge;


#1.1.1 affcihe des variables v2
//echo  $bleu, $tiret, $blanc, $tiret, $rouge;

#2  Réaliser le switch case en if/else/elseif
// $couleur = "jaune";

// if ($couleur === "bleu") {
//     echo "Vous aimez le bleu";
// } elseif ($couleur === "rouge") {
//     echo "vous aimez le rouge";
// } elseif ($couleur === "vert") {
//     echo "vous aimez le vert";
// } else {
//     echo "vous aimez une autre couleur et je pense que c'est le jaune";
// }

#3 faire une fonction pour appliquer la tva sur un montant ttc

// function applique_tva($prix){
//     return 'le montant pour le prix ' .$prix. ' est de : ' . ($prix * 1.2) . ' <hr>';
// }
// echo applique_tva(1000)

#4 faire une fonction pou choisit la tva a apppliquer
// function choix_tva($prix, $tva){
// return 'le montant de '. $prix .' avec '. $tva. ' de tva est de : ' .($prix * $tva). '<hr>';
// }

// echo choix_tva(1000, 1.2)

#5  Boucle while Modifier la boucle 
 // 0 - 1 - 2 - 3 - 4 - 5 - 6 7 - 8 - 9 -

 //5.1 faire la modification pour pas avoir le tiret a la fin de la liste

 
//  $i = 0;

// while ($i < 10) {
//     echo $i;

//     if ($i < 9) {
//         echo '-';
//     }

//     $i++;
// }

// 5.2 afficher des nombres de alllant de 1 a 100 avec le 50 en rouge


$i = 1;

while ($i <= 100) {

    if ($i == 50) {
        echo "<span style='color: red;'>$i</span><br>";
    } else {
        echo $i . "<br>";
    }

    $i++;
}


?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href = "./syle.css">
</head>

<body>

</body>

</html>