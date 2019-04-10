<?php


namespace App\Controller;


use App\Services\Serializer;

/**
 * @Route(route="/")
 */
class IndexController
{
    private $serializer;

    public function __construct(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    /**
     * @Route(route="/")
     */
    public function index()
    {
        return $this->serializer->serialize([
            "Action" => "Index",
            "Time" => time()
        ]);
    }
}