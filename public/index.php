<?php
declare(strict_types=1);

require __DIR__. '/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use \App\Format\BaseFormat;
use App\Format\FromStringInterface;
use App\Format\NamedFormatInterface;

print_r("Anonymous functions (Closures)\n\n");


$data = [
    "name" => "Luiz",
    "surname" => "Silva"
];

$json = new JSON($data);
$xml = new XML($data);
$yaml = new YAML($data);

$formats = [$json, $xml, $yaml];

function findByName(string $name, array $formats)
{
    $found = array_filter($formats, function($format) use ($name){
        return $format->getName() === $name;
    });

    return count($found) ? reset($found) : null;
}


var_dump(findByName('XML', $formats));