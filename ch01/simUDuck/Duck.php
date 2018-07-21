<?php

abstract class Duck {
    protected $flyBehavior;
    protected $quackBehavior;

    abstract public function swim();
    abstract public function display();

    public function preformFly() {
        $this->flyBehavior->fly();
    }

    public function preformQuack() {
        $this->quackBehavior->quack();
    }

    public function setFlyBehavior(FlyBehavior $fb) {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb) {
        $this->quackBehavior = $qb;
    }

}
