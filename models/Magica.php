<?php

trait Magica{
     public function __set($name, $value){
        $this->{$name} = $value;
    }
}