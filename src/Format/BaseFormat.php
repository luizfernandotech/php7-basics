<?php
declare(strict_types=1);

namespace App\Format;


abstract class BaseFormat
{
    protected $data;

    public function __construct(array $data = [])
    {
        $this->data = $data;
    }

    public function getData()
    {
        return $this->data;
    }

    public function setData(array $data): array
    {
        $this->data = $data;
    }

    public abstract function convert();

    public function __toString()
    {
        return $this->convert();
    }
}