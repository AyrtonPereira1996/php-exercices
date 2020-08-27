<?php
$number = isset($_GET["number"]) ? $_GET["number"]:0;
$auxi = 0;

while($auxi <= $number){
    echo "Input n $auxi <input type='text' id='txtNumber' name='txttexto'/>";
    $auxi++;
}




?>