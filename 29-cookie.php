<?php
setcookie('user', 'Felipe Ribeiro', time()+3600);
setcookie('email', 'felipefeferibeiro@gmail.com', time()+3600);
setcookie('ultima_pesquisa', 'tênis adidas', time()+3600);

var_dump($_COOKIE);