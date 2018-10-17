<?php

$all_animals = array (
    'Africa' => array (
    	'Panthera leo', 
    	'Hippotigris', 
    	'Giraffa camelopardalis',
    	'Rhinoceros bicornis', 
    	'Hippopotamus amphibius',
    ),
    'Europe' => array (
    	'Ursus arctos'
    ),
    'Australia' => array (
    	'Vombatidae',
    ),
    'Noth America' => array (
    	'Bison',
    ),
    'South America' => array (
    	'Folivora',
    ),
    'Antarctica' => array (
    	'Mirounga leonina',
    ),
);
echo '<pre>';
var_dump($all_animals);

$all_animals_in_one_array = [];

foreach ($all_animals as $continent => $animals) {
  //  if ((is_array($animals)) {
        foreach ($animals as $animal) {
            array_push($all_animals_in_one_array, $animal);
        }
   // }
}
echo '<pre>';
var_dump($all_animals_in_one_array);

foreach ($all_animals_in_one_array as $two_words_animals) {
    $result = explode(' ', $two_words_animals);
    var_dump($result);
}



?>
