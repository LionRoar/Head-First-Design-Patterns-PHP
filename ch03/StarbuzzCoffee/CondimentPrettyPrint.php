<?php

class CondimentPrettyPrint extends Beverage {

    protected $beverage;
    public function __construct(Beverage $beverage)
    {
       $this->beverage = $beverage; 
    }
     public function getDescription(): string
     {
         $description = '';
         $array = explode(', ', $this->beverage->getDescription());
         $mix = array_count_values($array);
         foreach($mix as $condiment => $count){
            $description .= $count == 2 ? 'Double ' . $condiment . ', ' : $condiment . ', ';
         }

         return $description;
         
     }

     public function cost() : float {
         return $this->beverage->cost();
     }
}