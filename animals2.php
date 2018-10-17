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


$animals_two_words = [];

foreach ($all_animals as $continent => $animals) {
  //  if ((is_array($animals)) {
        foreach ($animals as $animal) {
            $result = explode(' ', $animal);


            if (count($result) == 2) {
                array_push($animals_two_words, $result);
            }
        }
   // }
}

$first_words = [];
$second_words = [];

foreach ($animals_two_words as $animal_two_words) {
    array_push($first_words, $animal_two_words[0]);
    array_push($second_words, $animal_two_words[1]);
}

shuffle($first_words);
shuffle($second_words);

$new_animals = [];

for ($i=0; $i<count($first_words); $i++) {
    $new_name = $first_words[$i] . ' ' . $second_words[$i];
    array_push($new_animals, $new_name);
}

echo '<pre>';
var_dump($new_animals);

foreach ($all_animals as $continent => $animals) {
   for ($i=0; $i<count($first_words); $i++) {
      $result = array_search($animals, $first_words[$i]);      
      if ($result)
        echo $result;
    //foreach ($animals as $animal) {
      //  echo "$animal<br>";
    }
}

?>
