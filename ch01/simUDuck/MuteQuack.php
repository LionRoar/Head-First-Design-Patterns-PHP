<?php

class MuteQuack implements QuackBehavior {
    public function quack() {
        echo '<< Silence >>';
    }
}
