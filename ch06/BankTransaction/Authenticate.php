<?php


class Authenticate implements Transaction {
    public function execute(): bool
    {
        echo "authenticating ..\n";
        return true;
    }

    public function rollback()
    {
        echo "clean up auth cookie..\n";
    }
}