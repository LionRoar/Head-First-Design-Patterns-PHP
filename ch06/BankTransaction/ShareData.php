<?php

class ShareData implements Transaction {
    public function execute() : bool
    {
        echo "Sharing data with the bank ..\n";
        //if something goes wrong return false

        return true;
    }

    public function rollback()
    {
        echo "clean up session.\n";
    }
}