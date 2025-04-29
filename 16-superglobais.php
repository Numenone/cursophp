<<<<<<< HEAD
<?php

## $GLOBALS

$x = 10;
$y = 15;

function soma() {
	echo $GLOBALS['x'] + $GLOBALS['y'];

}

soma();
echo '<hr>';

## _SERVER

echo $_SERVER['PHP_SELF']."<br>"; ## nome do arquivo
echo $_SERVER['SERVER_NAME'].'<br>'; ## nome do servidor 
echo $_SERVER['SCRIPT_FILENAME'].'<br>'; ## nome absoluto
echo $_SERVER['DOCUMENT_ROOT']."<br>"; ## pasta
echo $_SERVER['REMOTE_ADDR'].'<br>'; ## IP
echo '<hr>';

=======
<?php

## $GLOBALS

$x = 10;
$y = 15;

function soma() {
	echo $GLOBALS['x'] + $GLOBALS['y'];

}

soma();
echo '<hr>';

## _SERVER

echo $_SERVER['PHP_SELF']."<br>"; ## nome do arquivo
echo $_SERVER['SERVER_NAME'].'<br>'; ## nome do servidor 
echo $_SERVER['SCRIPT_FILENAME'].'<br>'; ## nome absoluto
echo $_SERVER['DOCUMENT_ROOT']."<br>"; ## pasta
echo $_SERVER['REMOTE_ADDR'].'<br>'; ## IP
echo '<hr>';

>>>>>>> 0a5b2c7 (Added files to the repo.)
?>