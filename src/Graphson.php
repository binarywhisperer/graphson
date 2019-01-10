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

    public function jsonToGraph($json){
        $graph = new Graph();
        foreach(json_decode($json) as $value){
            if(isset($value->{$this->vertexIdKey})){
                $vertex = new Vertex($value->{$this->vertexIdKey}, (array) $value);
                $graph->addVertex($vertex);
            }elseif(isset($value->{$this->edgeKeyPrefix . '1'}) && isset($value->{$this->edgeKeyPrefix . '2'})){
                $edge = new Edge($value->{$this->edgeKeyPrefix . '1'}, $value->{$this->edgeKeyPrefix . '2'}, (array) $value);
                $graph->addEdge($edge);
            }
        }
        return $graph;
    }

    public function graphToJson(Graph $graph){
        $data = [];
        foreach($graph->vertices as $vertex){
            $vertex->setData($this->vertexIdKey,$vertex->id);
            $data[] = $vertex->data;
        }

        foreach($graph->edges as $edge){
            $edge->setData($this->edgeKeyPrefix . '1', $edge->vertex1);
            $edge->setData($this->edgeKeyPrefix . '2', $edge->vertex2);
            $data[] = $edge->data;
        }
        return json_encode($data);
    }
}