<?php

use Symfony\Component\VarDumper\Cloner\VarCloner;
use Symfony\Component\VarDumper\Dumper\CliDumper;
use Symfony\Component\VarDumper\VarDumper;

/**
 * Dump for Api
 * 
 * @param mixed ...$vars
 * @return void
 */
function da(...$vars): void
{
    CliDumper::$defaultOutput = 'php://output';
    VarDumper::setHandler(function($var) {
        $cloner = new VarCloner();
        $dumper = new CliDumper();
        $dumper->dump($cloner->cloneVar($var));
    });

    foreach ($vars as $var) {
        dump($var);
    }

    die(1);
}