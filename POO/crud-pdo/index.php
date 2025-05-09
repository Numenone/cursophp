<?php 

require_once 'vendor/autoload.php';

$produto = new \App\Model\Produto();
//$produto->setId(2);
$produto->setNome('Macbook Gamer');
$produto->setDescricao('Macbook condensador');

$produtoDao = new \App\Model\ProdutoDao();
//$produtoDao->delete(2);
//$produtoDao->update($produto);
$produtoDao->read();

foreach($produtoDao->read() as $produto):
	echo $produto['nome']."<br>".$produto['descricao']."<hr>";
endforeach;