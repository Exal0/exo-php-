<?php
echo "Hello World";
$name = "Michmuche";
$age = 9;
$message = "Attention";
$permis = true;
$car = true;

$personnages = [
    "nom" => "fenzi",
    "prenom" => "alex",
    "email" => "fenzi.alex13@gmail.com",
    "darkmode" => true
];

function showUser($personnages){
    foreach ($personnages as $key => $value) {
        return "$key ====> $value";
    }
    echo showUser($personnages);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<header>
<?php 
showUser($personnages);
?>
</header>



    <main>
        <h1>Welcome

            <?php


 


            if ($age > 18 ||$permis && $car ) {
                echo "OK il peut conduire";
            } else {
                echo $message . " Vous ne pouvez pas conduire";
            }

            ?>
        </h1>

        <div>
            <?php 
            $fruits = ["Pomme", "Poire", "Ananas"];

            for ($i=0; $i < count($fruits) ; $i++) { 
                
                echo $fruits[$i] . "<br>";
            }

            $persons = [
                "nom" => "Dupont",
                "age" => 19,
                "ville" => "Marseille"
            ];
        echo $personne["nom"];

        foreach ($persons as $key => $value) {
            echo "<hr>";
            echo "$key=====> $value<br>";
        }
            ?>
        </div>
    </main>


    <footer>
        <?php 
      
        ?>
    </footer>
</body>

</html>