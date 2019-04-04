<?php
declare(strict_types=1);

require __DIR__. '/../vendor/autoload.php';

use App\Format\JSON;
use App\Format\XML;
use App\Format\YAML;
use \App\Format\BaseFormat;
use App\Format\FromStringInterface;
use App\Format\NamedFormatInterface;

print_r("Typed arguments & return types\n\n");

function convertData(BaseFormat $format)
{
    return $format->convert();
}

function getFormatName(NamedFormatInterface $format): string
{
    return $format->getName();
}

// The question mark "?", makes the return optional
function getFormatByName(array $formats, string $name): ?BaseFormat
{
    foreach ($formats as $format) {
        if($format instanceof NamedFormatInterface && $format->getName() === $name){
            return $format;
        }
    }
    return null;
}

function justDumpData(BaseFormat $format): void
{
    var_dump($format->convert());
}

$data = [
    "name" => "Luiz",
    "surname" => "Silva"
];

$json = new JSON($data);
$xml = new XML($data);
$yaml = new YAML($data);

$formats = [$json, $xml, $yaml];


print_r("Result of conversions\n\n");

var_dump(convertData($json));
var_dump(getFormatName($json));
var_dump(getFormatByName($formats, 'XML'));

justDumpData($json);