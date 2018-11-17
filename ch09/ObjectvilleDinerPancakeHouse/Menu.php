<?php

interface Menu {
    public function getName() : string;
    public function createIterator() : IteratorInterface ;
}