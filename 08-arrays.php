<?php
// arrays númericos
$carros = array(1=>"BMW", 2=>"Veloster", 3=>"Hilux");
$carros[] = "Amarok";
$carros[10] = "Camaro";


print_r($carros);
echo "<hr>";

echo $carros[2];
echo "<hr>";


$motos = array();
$motos[] = "Yamaha";
$motos[] = "Honda";
$motos[5] = "Suzuki";

print_r($motos);
echo "<hr>";

echo $motos[5];
echo "<hr>";

$clientes = ["Felipe", "Bia", "Rodrigo"];
print_r($clientes);
echo "<hr>";

echo $clientes[1];
echo "<hr>";

/// count

echo count($carros);
echo "<br>";

$totalClientes = count($clientes);

echo $totalClientes;
echo "<hr>";

// foreach

foreach($carros as $valor) {
	echo $valor.'<br>';
}

echo "<hr>";


// arrays associativos
$pessoa = array("nome" => "Felipe", "idade" => 21, "altura" => 1.89);

$pessoa["cidade"] = "Pelotas";

print_r($pessoa);

echo '<hr>';
echo $pessoa["nome"].'<br>';
echo $pessoa["idade"].'<br>';
echo $pessoa["altura"].'<br>';
echo '<hr>';

foreach($pessoa as $indice => $valor) {
	echo $indice.": ".$valor.'<br>';
}

echo '<hr>';

// arrays multidimensionais

$time = array(
	"cariocas"=> array ("campeao"=>"vasco", "vice"=>"flamengo", "terceiro"=>"botafogo"),
	"paulistas"=> array ("santos", "sao paulo", "palmeiras"),
	"gauchos"=> array ("internacional", "gremio", "farroupilha"));

echo $time["gauchos"][0];
echo '<br>';

foreach($time["cariocas"] as $indice => $valor){
	echo $indice.": ".$valor.'<br>';
}


?>
