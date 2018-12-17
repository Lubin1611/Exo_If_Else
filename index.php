<?php
/**
 * Created by PhpStorm.
 * User: sstienface
 * Date: 04/12/2018
 * Time: 11:25
 */

// Premiere ligne
$a = 50;
$b = 10;
if ($a > $b) {
    echo "Hello World!";
}

//Deuxieme ligne

if ($a != $b) {
    echo "<br><br>Hello World2";
}

//Troisieme ligne
if ($a == $b) {
    echo "<br><br>Oui";
} elseif ($a != $b) {
    echo "<br><br>Non";
}

//Quatrieme ligne
echo "<br><br>";
if ($a == $b) {

    echo "1";

} elseif ($a > $b) {

    echo "2";

} else {

    echo "3";
}


//Cinquieme ligne
echo "<br><br>";

$color = "jj";


switch ($color) {
    case "red":
        echo "Hello";
        break;
    case "green":
        echo "Welcome";
        break;
    default :
        echo "dédé";
        break;
};

