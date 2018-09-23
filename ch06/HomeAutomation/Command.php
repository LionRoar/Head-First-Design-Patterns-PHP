<?php

interface Command {
    public function execute();
    public function undo();
}