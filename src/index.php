<?php
// application.php

require __DIR__.'/../vendor/autoload.php';

use Symfony\Component\Console\Application;
use Larry\SymfonyCli\Command\CreateUserCommand;

$application = new Application();

$application->add(new CreateUserCommand());

$application->run();