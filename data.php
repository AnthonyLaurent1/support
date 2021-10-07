<?php

$hobbies = $_POST['hobbies'];
$firstName = $_POST['firstname'];
$lastName = $_POST['lastname'];
$city = $_POST['city'];
$postal = $_POST['postal'];
$string = '';

foreach ($hobbies as $hobbie){
    $string .= $hobbie . ', ';
}
?>


<p>Hello je m'appelle <?= $firstName . ' ' . $lastName; ?> j'habite à <?= $city;?>, code postal <?= $postal;?>
<p>Mes hobbies sont : <?= $string; ?>
