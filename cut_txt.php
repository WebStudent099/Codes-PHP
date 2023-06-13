<!DOCTYPE html>
<html>
<body>
	
<?php
	$texte = "sault - ok - je suis bon - et toi ?";
	
	//fist way
	$array1 = preg_split("/[-]/",$texte);
	//à l´interrieur des crochets on peut mettre plusieurs caractères
	//si l´on souhaite decouper la chaine en fonction de plusiers caractères.
	//Exemple pour _,\ et @ on a [_\@]
	foreach ($array1 as $arr1){
		echo $arr1."<br>";
	}

	//second way
	$array2 = explode("-",$texte); 
	//permet de couper uniquement en fonction 
	//d´un seul caractère
	foreach($array2 as $arr2){
		echo "<br>".$arr2;
	}

?> 

</body>
</html>

