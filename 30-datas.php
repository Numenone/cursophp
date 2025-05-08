<?php
date_default_timezone_set('America/Sao_Paulo');
echo date('d/m/Y H:i:s');
echo "<hr>";

$date = date('Y-m-d');
$datetime = date('Y-m-d H:i:s');
echo $date.'<br>';
echo $datetime.'<hr>';


$time = time();
echo date('d/m/Y', $time).'<hr>';

$data_pagamento = mktime(15, 30, 00, 05, 10, 2025);
echo date('d/m - h:i', $data_pagamento).'<hr>';

$data = '2019-04-10 13:30:00';
$data = strtotime($data);
echo date('d/m/Y - H:i:s', $data);

