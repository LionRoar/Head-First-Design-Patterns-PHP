<?php

interface PaymentStrategy {
    public function pay(int $amount);
}