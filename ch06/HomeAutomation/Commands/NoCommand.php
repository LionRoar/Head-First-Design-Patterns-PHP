<?php namespace Commands;

class NoCommand implements \Command {
    public function execute()
    {
        echo 'No command is set.' . PHP_EOL;
    }
}