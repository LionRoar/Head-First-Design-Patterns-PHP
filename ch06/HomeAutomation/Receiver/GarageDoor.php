<?php namespace Receiver;

class GarageDoor {
    public function up(){
        echo 'Garage door opened.' . PHP_EOL;
    }

    public function down(){
        echo 'Garage door is closed. '. PHP_EOL;
    }
}