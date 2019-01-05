<?php

namespace Graph;

class Graphson
{
    protected $vertexIdKey;
    protected $edgeKeyPrefix;

    public function __construct($vertexIdKey = 'v', $edgeKeyPrefix = 'e'){
        $this->vertexIdKey = $vertexIdKey;
        $this->edgeKeyPrefix = $edgeKeyPrefix;
    }

    public function importFromJSON($json){
        $graph = new Graph();
        foreach(json_decode($json) as $value){
            if(isset($value->{$this->vertexIdKey})){
                $vertex = new Vertex($value->{$this->vertexIdKey}, $value);
                $graph->addVertex($vertex);
            }elseif(isset($value->{$this->edgeKeyPrefix . '1'}) && isset($value->{$this->edgeKeyPrefix . '2'})){
                $edge = new Edge($value->{$this->edgeKeyPrefix . '1'}, $value->{$this->edgeKeyPrefix . '2'}, $value);
                $graph->addEdge($edge);
            }
        }
        return $graph;
    }

    public function exportToJSON($graph){
        $data = [];
        foreach($graph->vertices as $vertex){
            $data[] = (array) $vertex;
        }

        foreach($graph->edges as $edge){
            $data[] = (array) $edge;
        }
        return json_encode($data);
    }
}