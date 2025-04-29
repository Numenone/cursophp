<<<<<<< HEAD
<?php
//is_array
$nomes = array("Felipe", "Rodrigo", "Maria", "José");

var_dump(is_array($nomes));
if(is_array($nomes)):
	echo "é um array";
else: 
	echo "não é um array";
endif;
echo '<hr>';

//in_array
echo in_array("Felipe", $nomes);
echo '<br>';
if(in_array("Felipe", $nomes)):
	soma();
else:
	echo "não está dentro do array";
endif;
echo '<br>';

function soma() {
	global $nomes;
	echo $nomes[0].' Ribeiro';
}


echo '<hr>';


//array_keys

 $pessoinhas = array("Primo"=>"Otávio", "Eu"=>"Felipe", "Namorada"=>"Lara");

 $keys = array_keys($pessoinhas);
 print_r($keys);
 echo '<hr>';

 //array_values

 $values = array_values($pessoinhas);
 print_r($values);
 echo '<hr>';

 //array_merge

 $carros = array("Camaro", "Uno", "Pálio");
 $motos = array("Pop 100", "50cc", "CB1000");

 $veiculos = array_merge($carros, $motos);
 print_r($veiculos);
 echo '<hr>';

 //array_pop e array_shift
 print_r($motos);
 echo '<br>';
 echo array_pop($motos).'<br>';
 print_r($motos);
 echo '<br>';
 echo array_shift($motos).'<br>';
 print_r($motos);
 echo '<hr>';


 // array_unshift 

 $frutas = array("Uva", "Maçã", "Manga");
 print_r($frutas).'<br>';
 array_push($frutas, "Morango", "Acerola");
 echo '<br>';
 print_r($frutas);
 echo '<hr>';

 // array_combine

 $combine = array("Campeão", "Vice", "Terceiro"); // esse é o ID
 $values = array("Vasco", "Internacional", "Mirasol"); // esse é os valores
 $times = array_combine($combine, $values);
 print_r($times);
 echo '<hr>';


//array_sum 

 $sominha = array(5,6.312,10.88,8);
 echo array_sum($sominha); // $total = array_sum($sominha)
 echo '<hr>';

// explode

 $data = "03/02/2004";

 $novaData = explode('/', $data);
 print_r($novaData);

$frase = "meu nome não é johnny";
$novaFrase = explode(' ', $frase);
print_r($novaFrase);

 echo '<hr>';


// implode

 $homens = array("Roberto", "Carlos", "Figueiredo");

 $string = implode(", ", $homens);
 echo $string;


?>
=======
<?php
//is_array
$nomes = array("Felipe", "Rodrigo", "Maria", "José");

var_dump(is_array($nomes));
if(is_array($nomes)):
	echo "é um array";
else: 
	echo "não é um array";
endif;
echo '<hr>';

//in_array
echo in_array("Felipe", $nomes);
echo '<br>';
if(in_array("Felipe", $nomes)):
	soma();
else:
	echo "não está dentro do array";
endif;
echo '<br>';

function soma() {
	global $nomes;
	echo $nomes[0].' Ribeiro';
}


echo '<hr>';


//array_keys

 $pessoinhas = array("Primo"=>"Otávio", "Eu"=>"Felipe", "Namorada"=>"Lara");

 $keys = array_keys($pessoinhas);
 print_r($keys);
 echo '<hr>';

 //array_values

 $values = array_values($pessoinhas);
 print_r($values);
 echo '<hr>';

 //array_merge

 $carros = array("Camaro", "Uno", "Pálio");
 $motos = array("Pop 100", "50cc", "CB1000");

 $veiculos = array_merge($carros, $motos);
 print_r($veiculos);
 echo '<hr>';

 //array_pop e array_shift
 print_r($motos);
 echo '<br>';
 echo array_pop($motos).'<br>';
 print_r($motos);
 echo '<br>';
 echo array_shift($motos).'<br>';
 print_r($motos);
 echo '<hr>';


 // array_unshift 

 $frutas = array("Uva", "Maçã", "Manga");
 print_r($frutas).'<br>';
 array_push($frutas, "Morango", "Acerola");
 echo '<br>';
 print_r($frutas);
 echo '<hr>';

 // array_combine

 $combine = array("Campeão", "Vice", "Terceiro"); // esse é o ID
 $values = array("Vasco", "Internacional", "Mirasol"); // esse é os valores
 $times = array_combine($combine, $values);
 print_r($times);
 echo '<hr>';


//array_sum 

 $sominha = array(5,6.312,10.88,8);
 echo array_sum($sominha); // $total = array_sum($sominha)
 echo '<hr>';

// explode

 $data = "03/02/2004";

 $novaData = explode('/', $data);
 print_r($novaData);

$frase = "meu nome não é johnny";
$novaFrase = explode(' ', $frase);
print_r($novaFrase);

 echo '<hr>';


// implode

 $homens = array("Roberto", "Carlos", "Figueiredo");

 $string = implode(", ", $homens);
 echo $string;


?>
>>>>>>> 0a5b2c7 (Added files to the repo.)
