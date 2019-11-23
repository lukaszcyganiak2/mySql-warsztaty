<!DOCTYPE html>
<html>
<body>

<?php


$imie = 'Jan';
// echo $imie;

 $nazwisko = 'Kowalki ';
 function moja_nazwa() {
    echo 'Moja pierwsza funkcjia  ';
    echo '<br>';
 };
function zParemetrami($wyrazPierwszy, $wyrazDrugi ) {
    echo $wyrazPierwszy. '  '.$wyrazDrugi;
    
}
moja_nazwa();
zParemetrami($imie, $nazwisko);

$auta = array('opel', 'bmw', 'audi');

$tablica = array('imie' => "jan", "nazwisko" => "Kowalski");

 echo  $tablica['imie'];


foreach ($auta as $marki) {
   echo  '<li>'.$marki.'</li>';

};
?> 

</body>
</html>