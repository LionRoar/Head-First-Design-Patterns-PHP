<?php

//* Command interface
interface Transaction {
    public function execute() : bool;
    public function rollback();
}