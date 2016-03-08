<?php

require_once "vendor/autoload.php";

use Symfony\Component\Console\Application;
use DruposerHelper\Command\InfoComposer;

$app = new Application();
$app->add(new InfoComposer());
$app->run();
