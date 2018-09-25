<?php namespace Commands;


use Command;

class PartyModeOffCommand implements Command {
    private $commands = array();

    public function __construct(array $cmds) {
        $this->commands = $cmds;
    }

    public function execute() {
        for ($i = 0; $i < count($this->commands); $i++) {
            $this->commands[$i]->undo();
        }
        }

    public function undo() {
        for ($i = 0; $i < count($this->commands); $i++) {
            $this->commands[$i]->execute();
        }
    }
}