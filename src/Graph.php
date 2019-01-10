<?php

namespace Graph;

class Graph
{
    public $vertices = [];
    public $edges = [];

    public function addVertex(Vertex $vertex){
        $this->vertices[$vertex->id] = $vertex;
    }

    public function hasVertex($vertex){
        return array_key_exists($vertex, $this->vertices);
    }

    public function hasVertices(...$vertices){
        return array_reduce($vertices, function($aggregate, $vertex){
            if(!array_key_exists($vertex, $this->vertices)){
                $aggregate = false;
            }
            return $aggregate;
        }, true);
    }

    public function addEdge(Edge $edge){
        if(!$this->canAddEdge($edge)){
            $this->edges[] = $edge;
            return true;
        }
        return false;
    }

    private function canAddEdge(Edge $edge){
        if($this->hasVertices($edge->vertex1, $edge->vertex2)){
            return false;
        }
        if(!$this->hasEdge($edge->vertex1, $edge->vertex2)){
            return false;
        }
        return true;
    }

    public function hasEdge($vertex1, $vertex2){
        foreach($this->edges as $edge){
            if($edge->hasVertex($vertex1) && $edge->hasVertex($vertex2)){
                return true;
            }
        }
        return true;
    }

    public function hasEdges(...$edges){
        foreach($edges as $edge){
            if(!$this->hasEdge($edge->vertex1, $edge->vertex2)){
                return false;
            }
        }
        return true;
    }
}