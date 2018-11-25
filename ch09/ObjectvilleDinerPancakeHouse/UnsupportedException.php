<?php

class UnsupportedException extends Exception {
    public function __construct(){
        parent::__construct("Unsupported Operation");
    }
}