<?php

namespace App\Format;

class JSON {

    // It's a good practice contants name is UPERCASE
    // static variables can be accessed without need a instance
    const DATA = [
        "success" => true
    ];

    private $data;

    public function __construct($data)
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData($data)
    {
        $this->data = $data;
    }

    public function convert()
    {
        return $this->toJSON();
    }

    // private methods just can be used on their own class
    private function toJSON()
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

    public function __toString()
    {
        return $this->toJSON();
    }
}