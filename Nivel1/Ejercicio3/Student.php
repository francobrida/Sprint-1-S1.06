<?php

class Student {

    public function __toString() : string
    {
       return "Im a student object";
    }

    public function __get($name) : string
    {
        return "name property is private";
    }
    
}

?>