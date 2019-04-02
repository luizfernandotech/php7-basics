<?php

namespace App\Format;

class YAML extends BaseFormat implements NamedFormatInterface
{
    public function convert()
    {
        $result = '';

        foreach ($this->data as $key => $value){
            $result .= "$key: $value\n";
        }

        return $result;
    }

    public function getName()
    {
        return 'YAML';
    }
}