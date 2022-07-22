<!-- Creare un array con 15 numeri casuali,
tenendo conto che l’array non dovrà contenere lo stesso numero 
più di una volta -->

<?php
$randomNumbers = [];

while(count($randomNumbers) < 15) {
    $randomNumber = rand(1, 50);
    
    if(!in_array($randomNumber, $randomNumbers)) {
        $randomNumbers[] = $randomNumber;
    }
}
var_dump($randomNumbers);
?>