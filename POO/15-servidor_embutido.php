<?php 
require_once 'vendor/autoload.php';

use Cocur\Slugify\Slugify;

$slug = new Slugify();
$slug->addRule('ll', 'ww');
$slug->addRule('!', "!!! x3");
echo $slug->slugify('Hello World!', '_');
