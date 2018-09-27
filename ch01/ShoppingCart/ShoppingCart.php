<?php

class ShoppingCart {
    private $items = array();

    public function addItem(Item $i){
        $this->items[$i->getId()] = $i;
    }

    public function removeItem(Item $i){
       unset($this->items[$i->getId()]);
    }

    public function calculateTotal(){
        $sum = 0;
        foreach ($this->items as $key => $i) {
            $sum += $i->getPrice();
        }
        return $sum;
    }

    public function pay(PaymentStrategy $paymentMethod){
        $amount = $this->calculateTotal();
        $paymentMethod->pay($amount);
    }
}