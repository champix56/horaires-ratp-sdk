<?php

require __DIR__ . '/../vendor/autoload.php';

/**
 * GET ALL LINES OF THE RATP NETWORK
 */

use Ratp\Api;
use Ratp\Lines;

$lines = new Lines();

$api = new Api();

foreach ($api->getLines($lines)->getReturn() as $line) {
    /** @var Ratp\Line $line */
    echo ucwords($line->getReseau()->getCode()) . ' ' . $line->getCode() . ' : ' . $line->getName() . "\n";
}