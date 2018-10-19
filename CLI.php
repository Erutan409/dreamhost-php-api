<?php

require_once __DIR__.'/vendor/autoload.php';

use League\CLImate\CLImate;
use Dreamhost\CLI;

$climate = new CLImate();

// TODO do bootstrap

$climate->clear();

CLI::outputOrderedList(CLI::getCommands(), $climate);

$input = $climate->input('Select command:');
$input->prompt();