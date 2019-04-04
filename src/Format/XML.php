<?php
declare(strict_types=1);

namespace App\Format;

class XML extends BaseFormat implements NamedFormatInterface
{
    public function convert()
    {
        $result = '';

        foreach ($this->data as $key => $value){
            $result .= "<$key>$value</$key>";
        }

        return $result;
    }

    public function getName(): string
    {
        return 'XML';
    }
}