<!DOCTYPE html>
<html>
<body>

<?php
$zminna = 5;
 
// pojedyniczy warunek 
if ($zminna == 5) {
	echo  'warunek jest spełniony';
};

echo '<br>';
// warunek z alternatywą 

// if ($zminna == 7) {
// 	echo  'warunek jest spełniony' ;
// } else {
// echo  'warunek  nie jest spełniony'  ;
// };
echo '<br>';
// warunek z elseif 

// if ($zminna == 7) {
// 	echo ' zmienna to nie 7' ;
// } elseif($zminna  == 5){
// echo  'zmienna to nie 5' ;
// }
echo '<br>';
// skrócona wersja if else 

// echo $zminna  == 45? 'instrukcja_gdy_wartość_true' : 'instrukcja_gdy_wartość_false';
$colors = array("red", "green", "blue", "yellow");

foreach($colors as $value) {
  echo "$value <br>";
}
for($i =0; $i < count($colors); $i++) {
  echo '<p>'. $colors[$i]   . '</p>';
}
?> 

</body>
</html>