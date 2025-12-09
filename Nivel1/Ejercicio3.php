<?php

class Student {

    private string $name = "John Doe";

    public function __toString()
    {
       return "Im a student object";
    }

    public function __get($name)
    {
        return "name property is private";
    }

}

?>