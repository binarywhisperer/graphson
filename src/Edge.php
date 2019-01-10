<?php

namespace Graph;


use Graph\Traits\HasData;

class Edge
{
    use HasData;

    protected $vertex1;
    protected $vertex2;
    protected $data;

    public function __construct($vertex1, $vertex2, $data = [])
    {
        $this->vertex1 = $vertex1;
        $this->vertex2 = $vertex2;
        $this->data = $data;
    }

    public function hasVertex($vertexId)
    {
        return ($this->vertex1 === $vertexId || $this->vertex2 === $vertexId);
    }

    public function __get($key)
    {
        return $this->getData($key);
    }
}