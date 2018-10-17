 <?php

$all_animals = [
    'Africa' => [
        'Panthera leo', 
        'Hippotigris', 
        'Giraffa camelopardalis',
        'Rhinoceros bicornis', 
        'Hippopotamus amphibius',
    ],
    'Europe' => [
        'Ursus arctos'
    ],
    'Australia' => [
        'Vombatidae',
    ],
    'Noth America' => [
        'Bison',
    ],
    'South America' => [
        'Folivora',
    ],
    'Antarctica' => [
        'Mirounga leonina',
    ],
];


$animals_two_words = [];

foreach ($all_animals as $continent => $animals) {
  //  if ((is_array($animals)) {
        foreach ($animals as $animal) {
            $result = explode(' ', $animal);

            if (count($result) == 2) {
                array_push($animals_two_words, $result);
            }
        }
 
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
 //   echo "<h3>$continent</h3>";
 
   // foreach ($animals as $animal) {
      // echo $animal . '<br>';
       $resultat = implode(' ', $animals);
       //echo $resultat;

       $resultat2 = str_replace(' ', ', ', $resultat);
     //  echo $resultat2;

       $resultat3 = explode(', ', $resultat2);
   //  var_dump($resultat3) ;
      



$continents[$continent] = [];
  //  for ($j=0; $j < count($all_animals); $j++) {

        for ($i=0; $i<count($first_words); $i++) {
             $result = array_search($first_words[$i], $resultat3);
        //array_push($continents, $result);  
        // echo $first_words[$i] . '<br>';
         
             if ($result !== false) {
              echo $first_words[$i] . ' в ' . $continent . '<br>';
                $continents[$continent][] = $first_words[$i];
               // array_push($continents, $continent);
               // array_push($continent, $first_words[$i]);
            } 
             
//echo $all_animals[$j] . '<br>';
              /*  
                $result[$i] = array_search($first_words[$i], $animal);    
                
              //
               
           }
        }
                echo "$animal<br>";*/
        }
        
   // }
}
var_dump($continents);
?>
