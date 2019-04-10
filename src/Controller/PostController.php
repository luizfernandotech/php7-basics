<?php


namespace App\Controller;


use App\Services\Serializer;

class PostController
{
    private $serializer;

    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    public function index()
    {
        return $this->serializer->serialize([
            "Action" => "Post",
            "Time" => time()
        ]);
    }
}