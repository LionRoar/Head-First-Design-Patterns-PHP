<?php


class Debit implements Transaction {
    private $debitAmount = 0;
    public function setAmount(int $amount){
        if($amount > 0 ){
            $this->debitAmount = $amount;
        }
    }
    public function execute(): bool
    {
        echo "Processing debit with the bank : " . $this->debitAmount .
        PHP_EOL;

        return false;
    }

    public function rollback()
    {
        echo "request cancellation of debit to the bank fot amount : " .
        $this->debitAmount . PHP_EOL;
    }
}