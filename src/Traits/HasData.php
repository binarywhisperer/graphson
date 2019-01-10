<?php

namespace Graph\Traits;

trait HasData
{
    public function data(){
        return $this->data;
    }

    public function getData($key){
        if($key === 'data'){
            return $this->data();
        }elseif(array_key_exists($key, $this->data)) {
            return $this->data[$key];
        }
        return null;
    }

    public function setData($key, $value){
        $this->data[$key] = $value;
    }

    public function deleteData($key){
        unset($this->data[$key]);
    }
}