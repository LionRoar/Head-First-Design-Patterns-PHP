<?php

class PaypalStrategy implements PaymentStrategy {

    private $email;
    private $password;

    public function __construct(string $email , string $passwd)
    {
        $this->email = $email;
        $this->password = $passwd;
    }

    public function pay(int $amount){
        echo "$amount paid using paypal.\n";
    }
}