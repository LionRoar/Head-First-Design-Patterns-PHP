<?php


class TransactionExecutioner {

    private $commandQueue = Array();
    private $executeStack = Array();

    public function setCommand(Transaction $command){
        array_push($this->commandQueue , $command);
    }

    public function runCommands(){
        try{
            while(count($this->commandQueue) > 0 ){
                $command  = array_shift($this->commandQueue);

                if($command->execute()){
                    array_push($this->executeStack,$command);
                }else{
                    $this->rollbackCommands(); break;
                }
            }
        }catch(Exception $e){
            $this->rollbackCommands();
        }finally {
            $this->commandQueue = array();
            $this->executeStack = array();
        }
    }

    public function rollbackCommands(){
        //roll back the commands in reverse
        //order of their execution

        while(count($this->executeStack) > 0 ){
            $command = array_pop($this->executeStack);
            $command->rollback();
        }

    }
}