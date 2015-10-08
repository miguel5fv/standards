<?php
use vendor;

function spl_autoload($className)
{
    require_once 'classes/' . strtolower($className) . '.php';
}
spl_autoload_register();

$cli        = new Cli();
$injection  = array('cli' => $cli);

$processor  = new Processor($injection);
$processor->run();
