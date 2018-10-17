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
		$animals_two_words[$continent] = [];
        foreach ($animals as $animal) {
            $result = explode(' ', $animal);

            if (count($result) == 2) {
                 $animals_two_words[$continent][] = $result;

            }
        }
 
}

echo '<pre>';

echo PHP_EOL;
var_dump($animals_two_words);
echo PHP_EOL;

$first_words = [];
$second_words = [];

foreach ($animals_two_words as $continents2 => $animalsTwoWords) {
		$first_words[$continents2] = [];

	foreach ($animalsTwoWords as $animalTwoWords) {
		$first_words[$continents2][] = $animalTwoWords[0];
		//$second_words[$continents2][] = $animalTwoWords[1];
	   // array_push($first_words,$animalTwoWords[0]);
	    array_push($second_words, $animalTwoWords[1]);
	}
}

echo '<pre>' ;
echo '$first_words 1' . '<br>';
var_dump($first_words);
echo '$second_words 1' . '<br>';
var_dump($second_words);

shuffle($second_words);

echo '<pre>' ;
echo '$first_words 2' . '<br>';
var_dump($first_words);

echo '$second_words 2' . '<br>';
var_dump($second_words);


$new_animals_first_part = [];
//for ($i=0; $i<count($second_words); $i++) {
	foreach ($first_words as $continents3 => $first_word) {
	//	$a = count($first_word);
	//	echo '$a = ' . $a . '<br>';
//$new_animals[] = $continents3;
		if (count($first_word) > 0) {
			
			//for ($j=0; $j<count($continents3); $j++) {
			$new_animals_first_part[$continents3] = $first_word;//[$j]// . ' ' . $second_words[$i];
		}
}
	for ($i=0; $i<count($second_words); $i++) {
		echo $second_words[$i] . '<br>';
	}
		$new_animals = [];
	  	foreach ($new_animals_first_part as $key => $new_animal_first_part) {
	  		foreach ($new_animal_first_part as $newAnimalFirstPart) {
	  			//echo '$newAnimalFirstPart' . '<br>' . $newAnimalFirstPart . '<br>';
	  			for ($i=0; $i<count($second_words); $i++) {
	  				//echo $second_words[$i];
	   $new_name = $newAnimalFirstPart . ' ' . $second_words[$i];
		//	$new_animals_first_part = $continents3[$i];
	   
	} $new_animals[$key][] = $new_name;
	  		}
	  		
	 		//}
	  		
}	  	

echo '<pre>';
echo '$new_animals_first_part' . '<br>';
var_dump($new_animals_first_part);
echo '$new_animals' . '<br>';
var_dump($new_animals);

/*

foreach ($all_animals as $continent => $animals) {
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

        for ($i=0; $i<count($first_words); $i++) {
             $result = array_search($first_words[$i], $resultat3);
        //array_push($continents, $result);  
        // echo $first_words[$i] . '<br>';
         
             if ($result !== false) {
  //            echo $first_words[$i] . ' в ' . $continent . '<br>';
               // array_push($continents, $continent);
               // array_push($continent, $first_words[$i]);
            } 
             
//echo $all_animals[$j] . '<br>';
               
               // $result[$i] = array_search($first_words[$i], $animal);    
                
              //
               
           }
  //      }
               // echo "$animal<br>";
 }

}
  */     


?>
