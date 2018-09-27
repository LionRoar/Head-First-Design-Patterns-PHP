<?php


class CreditCardStrategy implements PaymentStrategy {

    private $name;
    private $cardNo;
    private $cvv;
    private $expDate;

    public function __construct(
        string $name , string $ccno ,
        string $cvv, string $exp){

        $this->name = $name;
        $this->cardNo = $ccno;
        $this->cvv = $cvv;
        $this->expDate = $exp;

    }

    public function pay(int $amount){
        echo "$amount paid with credit/debit card. \n";
    }

}