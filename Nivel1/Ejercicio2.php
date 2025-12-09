<?php

class Computer{

    public function think() {
        return "I'm thinking. Using the function ". __FUNCTION__ .", inside the class " . __CLASS__;
    }
}

$newPc =new Computer();
echo $newPc->think();

?>