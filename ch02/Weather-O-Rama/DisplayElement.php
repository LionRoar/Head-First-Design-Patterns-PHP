<?php


abstract class DisplayElement implements SplObserver {

    /**
     * for $weatherSubject
     * In the future you may want to un-register this observer
     * and it would be handy to already have a reference to the subject.
     *
     */
    private $weatherSubject;

    public function __construct(SplSubject $subject){
        $this->weatherSubject = $subject;
        $this->weatherSubject->attach($this); //register
    }

    public function unsubscribe(){
        $this->weatherSubject->detach($this);
    }

    public function resubscribe(){
        $this->weatherSubject->attach($this);
    }
    abstract public function display();
}