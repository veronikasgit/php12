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


$animals_two_words =[];   
foreach ($all_animals as $continent => $animals) {
  //  $animals_two_words[] = $continent;
  //  if ((is_array($animals)) {
   // $animals_two_words[$continent] = [];
        foreach ($animals as $animal) {
            $result = explode(' ', $animal);

            if (count($result) == 2) {
                 $animals_two_words/*[$continent]*/[] = $result;

            }
        }
 
}

echo '<pre>';


//var_dump($animals_two_words);
echo PHP_EOL;

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
echo '$first_words'. '<br>'. '<br>';
var_dump($first_words);

$continents = [];
foreach ($all_animals as $cont => $animals) {
  //  echo "<h3>$continent</h3>";

   // foreach ($animals as $animal) {
      // echo $animal . '<br>';
       $resultat = implode(' ', $animals);
       //echo $resultat;

       $resultat2 = str_replace(' ', ', ', $resultat);
     //  echo $resultat2;

       $resultat3 = explode(', ', $resultat2);
   //  var_dump($resultat3) ;

//$continents = [];
  //for ($j=0; $j < count($all_animals); $j++) {
    //       echo "<h3>$continent</h3>";
    $continents[$cont] = [];
        for ($i=0; $i<count($first_words); $i++) {
             $resultat4 = array_search($first_words[$i], $resultat3);
        //array_push($continents, $result);  
      //  var_dump($first_words[$i])  . '<br>';
         echo   $resultat4;
             if ($resultat4 == true) {
          //  echo '<pre>';
//echo 'если верно'. '<  то>';  
  //            echo $first_words[$i] . ' в ' . $cont . '<br>';
        //  $continents[$cont][] = $first_words[$i];
        echo    $first_words[$i];
               // array_push($continents, $continent);
               // array_push($continent, $first_words[$i]);
            }//   else {
              //echo '<pre>';
//echo 'если не верно'. 'то' ;  
  //            echo 'false'. '<br>'; 
         //   }
             
//echo $all_animals[$j] . '<br>';
               
               // $result[$i] = array_search($first_words[$i], $animal);    
                
              //
               
           }
  //      }
               // echo "$animal<br>";
 }


echo '<pre>';
echo '$all_animals'. '<br>'. '<br>';      
var_dump($all_animals). '<br>'. '<br>'; 
echo '$resultat'. '<br>'. '<br>';      
var_dump($resultat). '<br>'. '<br>'; 
echo '$resultat2'. '<br>'. '<br>';  
var_dump($resultat2). '<br>'. '<br>'; 
echo '$resultat3'. '<br>'. '<br>';  
var_dump($resultat3). '<br>'. '<br>'; 

echo '<pre>';
echo '$continents'. '<br>'. '<br>';  
var_dump($continents);  
   // }

?>
