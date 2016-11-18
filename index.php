<?php
//exo 1 
function bool(){
	return true; 
}
var_dump(bool()); 

//exo 2
echo "<br>";

function chaine($char = "coucou"){
	return $char; 
}
var_dump(chaine());

//exo 3
echo "<br>";

function chaines($char1 = "coucou", $char2 = "Samir"){
	return $char1." ".$char2; 
}
var_dump(chaines());

//exo 4

echo "<br>";
function nbr( $nb1 = 5, $nb2 = 10){
	if ($nb1 > $nb2) {
		echo "Le premier nombre est plus grand";
	}
	elseif ($nb1 < $nb2) {
		echo "Le premier nombre est plus petit";
	}
	elseif ($nb1 == $nb2) {
		echo "Les deux nombres sont identiques";
	}
}

nbr();

//exo 5
echo "<br>";
function both($nbr = 5, $Char = "coucou"){
	echo $nbr." et ".$Char;
}
both();

//exo 6
echo "<br>";
function presentation($nom = "Ben sadi", $prenom = "Samir", $age = 30){
	echo "Bonjour ". $nom . " " . $prenom .", tu as ".$age." ans";
}
presentation();

//exo 7
echo "<br>";
function gender($genre = "homme" || "femme", $age = 18){
	if (($genre == "homme") && ($age >= 18)) {
		echo "Vous êtes un homme et vous êtes majeur";
	}
	elseif (($genre == "homme") && ($age < 18)) {
		echo "Vous êtes un homme et vous êtes mineur";
	}
	elseif (($genre == "femme") && ($age >=18)) {
		echo "Vous êtes une femme et vous êtes majeur";
	}
	elseif (($genre == "femme") && ($age < 18)) {
		echo "vous êtes une femme et vous êtes mineur";
	}
}
gender();

//exo 8
echo "<br>";
function sommes($nbr1 = 10, $nbr2 = 20, $nbr3 = 30){
	echo $nbr1 + $nbr2 + $nbr3;
}
sommes();
















  ?>