<?php

class Computer{

    public function think() : string {
        return "I'm thinking. Using the function ". __FUNCTION__ .", inside the class " . __CLASS__;
    }
}

?>