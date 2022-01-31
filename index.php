<?php
//
////1
//$string = file_get_contents("dictionnaire.txt", FILE_USE_INCLUDE_PATH);
//$dico = explode("\n", $string);
//
//echo  "Le dictionnaire contient: " . count($dico). " mots<br>";
//
////2
//$number = 0;
//foreach ($dico as $word) {
//    if (strlen($word) === 15) {
//        $number++;
//    }
//}
//echo "Il y a " . $number . " mots qui contiennent 15 caractères.<br>";
//
////3
//$numberCharacters = 0;
//foreach ($dico as $word) {
//    if (strpos($word, "w") !== false) {
//        $numberCharacters++;
//    }
//}
//echo "Il y a ".$numberCharacters . " fois, la lettre w.<br>";
//
////4
//$numberCharac = 0;
//foreach ($dico as $word) {
//    if (strrpos($word, "q") === strlen("$word") -1) {
//        $numberCharac++;
//    }
//}
//echo "Il y a " . $numberCharac . " mots qui finissent par la lettre q.<br>";

//Liste de films
$string = file_get_contents("films.json", FILE_USE_INCLUDE_PATH);
$brut = json_decode($string, true);
$top = $brut["feed"]["entry"]; # liste de films

//echo "<pre>";
//var_dump($top);
//echo "<pre>";
//1
?><ol><?php
    for ($i = 0; $i < 10 ; $i++) {
    echo "<li>".$top[$i]['im:name']['label']."</li>";
    }?>
</ol>

//2
<?php

foreach ($top as $key => $value) {
    if ($top['im:name']['label'] === $value['gravity']) {
        echo "La clé". $key ."contient la valeur gravity";
    }
}




