<?php

namespace Graph;


class Graph
{
    protected $vertexNames = ['vertices'];
    protected $edgeNames = ['edges'];

    protected $vertices = [];
    protected $edges = [];

    public function __construct($json){
        $this->importFromJSON($json);
    }

    protected function importFromJSON($json){
        foreach($json as $key => $value){
            if(in_array($key, $this->vertexNames)){
                $this->vertices = array_merge($this->vertices, $value);
            }elseif(in_array($key, $this->edgeNames)){
                $this->edges = array_merge($this->edges, $value);
            }
        }
    }

    /**
     * Count number of vertices
     *
     * @return int
     */

    public function countVertices(){
        return count($this->vertices);
    }

    /**
     * Count number of edges
     *
     * @return int
     */
    public function countEdges(){
        return count($this->edges);
    }
}