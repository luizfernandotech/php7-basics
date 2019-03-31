<?php

namespace App\Format;

class JSON {

    // It's a good practice contants name is UPERCASE
    // static variables can be accessed without need a instance
    const DATA = [
        "success" => true
    ];

    public $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function convert()
    {
        return json_encode(
            array_merge(
                self::DATA,
                $this->data
            )
        );
    }

    // static methods can be accessed without need a instance
    public static function convertData()
    {
        return json_encode(self::DATA);
    }
}