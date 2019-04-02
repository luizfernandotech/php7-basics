<?php

require __DIR__. '/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use App\Format\FromStringInterface;
use App\Format\NamedFormatInterface;

$data = [
    "name" => "Luiz",
    "surname" => "Silva"
];

$json = new JSON($data);
$xml = new XML($data);
$yaml = new YAML($data);

print_r("Interfaces\n\n");


print_r("Result of conversions\n\n");

$formats = [$json, $xml, $yaml];

foreach ($formats as $format)
{
    if($format instanceof NamedFormatInterface){
        var_dump($format->getName());
    }
    var_dump(get_class($format));
    var_dump($format->convert());
    var_dump($format instanceof FromStringInterface);

    if($format instanceof FromStringInterface){
        var_dump($format->convertFromString('{"name": "Luiz", "surname": "Silva"}'));
    }
}


