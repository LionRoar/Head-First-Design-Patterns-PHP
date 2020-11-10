<?php

use Commands\NoCommand;

class RemoteControl
{
    /**
     * @var Command[]
     */
    private $onCommands = [];
    /**
     * @var Command[]
     */
    private $offCommands = [];
    /**
     * @var Command
     */
    private $undoCommand; // track the last command

    public function __construct()
    {
        $NoCommand = new NoCommand;

        for ($i = 0; $i < 7; $i++) {
            $this->onCommands[$i] = $NoCommand;
            $this->offCommands[$i] = $NoCommand;
        }
        $undoCommand = $NoCommand;
    }

    public function setCommand(int $slot, Command $on, Command $off)
    {
        $this->onCommands[$slot] = $on;
        $this->offCommands[$slot] = $off;
    }

    public function onButtonWasPushed(int $slot)
    {
        if (isset($this->onCommands[$slot])) {
            $this->onCommands[$slot]->execute();
            $this->undoCommand = $this->onCommands[$slot];
        } else throw new Exception('Slot is empty.');
    }

    public function offButtonWasPushed(int $slot)
    {
        if (isset($this->offCommands[$slot])) {
            $this->offCommands[$slot]->execute();
            $this->undoCommand = $this->offCommands[$slot];
        } else throw new Exception('Slot is empty.');
    }

    public function undoButtonWasPushed()
    {
        echo "[ <-undo ] : \n";
        $this->undoCommand->undo();
    }

    private function class_name($class): string
    {
        $className = get_class($class);
        $lastSlash = strpos($className, '\\') + 1;
        $className = substr($className, $lastSlash);
        return $className;
    }

    public function __toString()
    {
        $str = "\n-------- Remote Control --------\n";
        for ($i = 0; $i < count($this->onCommands); $i++) {
            $str .= "[slot $i] | " .
                $this->class_name($this->onCommands[$i])
                . " | " . $this->class_name($this->offCommands[$i]) . "\n";
        }

        $str .= "[undo] " . $this->class_name($this->undoCommand) . "\n"
            . "--------------------------------\n\n";
        return $str;
    }
}
