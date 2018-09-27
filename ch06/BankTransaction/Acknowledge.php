<?php

class Acknowledge implements Transaction {
    public function execute(): bool
    {
        echo "get acknowledgement from the bank \n";
        return true;
    }

    public function rollback()
    {
        echo "things went sideways, initiating rollback .. \n";
    }
}