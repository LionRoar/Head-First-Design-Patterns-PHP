<?php

abstract class Duck {

    /**
     * Instance variables hold a reference to a specific behavior at runtime
     *
     * @var [type]
     */
    protected $flyBehavior;
    protected $quackBehavior;

    /**
     * These methods replace
     *
     * @return void
     */
    abstract public function swim();
    abstract public function display();

    public function preformFly() {
        $this->flyBehavior->fly();
    }

    public function preformQuack() {
        $this->quackBehavior->quack();
    }

    /**
     * We can call these methods anytime we want to change the behavior of a duck on the fl y.
     *
     * @param FlyBehavior $fb
     * @return void
     */
    public function setFlyBehavior(FlyBehavior $fb) {
        $this->flyBehavior = $fb;
    }

    public function setQuackBehavior(QuackBehavior $qb) {
        $this->quackBehavior = $qb;
    }

}
