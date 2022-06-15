<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>

<?php 
require_once __DIR__ . "/Food.php";
require_once __DIR__ . "/Game.php";
require_once __DIR__ . "/Accessory.php";
require_once __DIR__ . "/User.php";

// PRODOTTI
// Cibo
$crocchette = new Food("Cibo", "F001", "gatto", "20/12/2022", "5.90", "concluso");
$scatoletta_carne = new Food("Cibo", "F002", "cane", "14/07/2022", "3.90", "disponibile");
// Giocattoli
$palla = new Game("Giocattolo", "G001", "Piccola", "Gomma", "13.50", "disponibile");
$pollo = new Game("Giocattolo", "G002", "Media", "Gomma", "8.50", "concluso");
// Accessori
$collare = new Accessory("Accessorio", "A001", "Cane", "Pelle", "14.30", "disponibile");
$guinzaglio = new Accessory("Accessorio", "A002", "Cane", "Cuoio", "21.90", "disponibile");

// ACQUISTI UTENTI 
$giulia = new User("Giulia", "giulia@gmail.com", "false", "false");


try {
    $giulia ->addProductToCart($scatoletta_carne);
} catch (Exception $e){
    echo "<br> Attenzione: " . $e->getMessage() . "<br>";
}

try {
    $giulia ->addProductToCart($collare);
} catch (Exception $e){
    echo "<br> Attenzione: " . $e->getMessage() . "<br>";
}

try {
    $giulia ->addProductToCart($pollo);
} catch (Exception $e){
    echo "<br> Attenzione: " . $e->getMessage() . "<br>";
}

$arianna = new User("Arianna", "arianna@gmail.com", "true", "true");
try {
    $arianna ->addProductToCart($crocchette);
} catch (Exception $e){
    echo "<br> Attenzione: " . $e->getMessage() . "<br>";
}

try {
    $arianna ->addProductToCart($palla);
} catch (Exception $e){
    echo "<br> Attenzione: " . $e->getMessage() . "<br>";
}

try {
    $arianna ->addProductToCart($palla);
} catch (Exception $e){
    echo "<br> Attenzione: " . $e->getMessage() . "<br>";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MyPet.com</title>

    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- 
        Oggi pomeriggio dovete aggiungere nel vostro e-commerce di prodotti per gli animali le nuove funzionalità visti oggi a lezione:
        - almeno una trait;
        - almeno un'eccezione.
    -->

    <h2>Prodotti disponibili</h2>
    <ul class="products">
        <li> <?php echo $crocchette->printInfo(); ?> </li>
        <li> <?php echo $scatoletta_carne->printInfo(); ?> </li>
        <li> <?php echo $palla->printInfo(); ?> </li>
        <li> <?php echo $pollo->printInfo(); ?> </li>
        <li> <?php echo $collare->printInfo(); ?> </li>
        <li> <?php echo $guinzaglio->printInfo(); ?> </li>
    </ul>

    <!-- Carrello Giulia -->
    <h2>Ciao <?php echo $giulia->name; ?>. Ecco il tuo carrello:</h2>
    <ul class="cart">
        <?php foreach($giulia->cart as $cartItem) { ?>
        <li><?php echo $cartItem->printInfo(); ?></li>
        <?php } ?>
    </ul>
    <h4>Carta di credito: <?php echo $giulia->checkCreditCard($giulia->credit_card)?></h4>
    <h3>Totale: € <?php echo $giulia->getTotalPrice($giulia->registered); ?></h3>

    <!-- Carrello Arianna -->
    <h2>Ciao <?php echo $arianna->name; ?>. Ecco il tuo carrello:</h2>
    <ul class="cart">
        <?php foreach($arianna->cart as $cartItem) { ?>
        <li><?php echo $cartItem->printInfo(); ?></li>
        <?php } ?>
    </ul>
    <h4>Carta di credito: <?php echo $arianna->checkCreditCard($arianna->credit_card)?></h4>
    <h3>Totale: € <?php echo $arianna->getTotalPrice($arianna->registered); ?></h3>

</body>
</html>