<?php

namespace Graph;


use Graph\Traits\HasData;

class Vertex
{
    use HasData;

    protected $id;
    protected $data;

    public function __construct($id, $data = [])
    {
        $this->id = $id;
        $this->data = $data;
    }

    public function __get($key)
    {
        return $this->getData($key);
    }
}