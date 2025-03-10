<?php
require('../vendor/autoload.php');

use App\Config;

// Récuperer une instance de Config
$config1 = Config::getInstance();

// Afficher une valeur contenu dans config.php
echo 'Database Host: ' . $config1->get('db')['host'] . PHP_EOL;
echo 'Debug Mode: ' . ($config1->get('debug') ? 'Enabled' : 'Disabled') . PHP_EOL;

// Récupérer une seconde instance de Config et vérifié que les deux instances sont identiques
$config2 = Config::getInstance();
echo 'Instances are identical: ' . ($config1 === $config2 ? 'Yes' : 'No') . PHP_EOL;