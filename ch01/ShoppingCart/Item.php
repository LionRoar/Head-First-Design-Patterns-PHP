<?php

class Item {
    private static $IDx = 0;
    private $id;
    private $upcCode;
    private $price;

    public function __construct(string $upc, int $cost){
        $this->id = ++self::$IDx;
        $this->upcCode = $upc;
        $this->price = $cost;
    }

    public function getUpcCode():string {
        return $this->upcCode;
    }

    public function getPrice():int{
        return $this->price;
    }
    public function getId():int{
        return $this->id;
    }
}