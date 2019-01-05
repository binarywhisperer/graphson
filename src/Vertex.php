<?php

namespace Graph;


class Vertex
{
    protected $id;
    protected $data;

    public function __construct($id, $data)
    {
        $this->id = $id;
        $this->data = $data;
    }

    public function __get($name)
    {
        if (array_key_exists($name, $this->data)) {
            return $this->data[$name];
        }
        return null;
    }
}