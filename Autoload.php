<?php 

require __DIR__.'/src/Autoload.php';

$autoload = new Kairos\Autoload;
$autoload->register();
$autoload->addNamespace('Kairos', 'src');