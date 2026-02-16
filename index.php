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
        echo "<br>";
        echo "$key ====> $value";
    }
    
}

var_dump($_POST);

$name = $_POST["name"];
$email = $_POST[ "email"];
$message = $POST["message"];


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.8/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-sRIl4kxILFvY47J16cr9ZwB07vP4J8+LH7qKQnuqkuIAvNWLzeN8tE5YBujZqJLB" crossorigin="anonymous">

</head>

<body>
<header>
<?php 
showUser($personnages);
?>
</header>



    <main>
   <form action="#" method="POST" class="form_style">

   <label for="name"> name </label>
   <input type="name" name="name">

   <label for="email">email</label>
   <input type="mail" name = "email">

   <label for="message">Message</label>
   <input type="text" name = "message">

   <button type="submit" name = "submit"> submit </button>
   </form>

    </main>


    <footer>
        <?php 
      
        ?>
    </footer>
</body>

</html>