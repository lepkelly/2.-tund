<?php

	$first_name = "Kelly";
	$last_name = "Leppik";

	//tr�kib v�lja
	echo $first_name." ".$last_name;

?>

<br>

<?php 
	
	$age = 5;
	
	// if( loogikatehe ){ t�ene } else { v��r }
	if($age < 18) {
		echo "alaealine";
	} else {
		echo "t�isealine";
	}


?>

<br>

<?php

	for($i = 0; $i < $age; $i = $i +1) {
		// see, mida korratakse
		echo "palju, ";
	}
	
	echo "�nne" ;

?>

<br>

<?php

	// kuu�pev - date
	echo date("l, j F Y");
?>