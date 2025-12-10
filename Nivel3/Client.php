<?php

class Client {

    private string $name;
    private string $email;
    private string $phone;
    private string $iban;
    private string $secretWord;

    public function __construct(string $name, string $email, string $phone, string $iban, string $secretWord) {
        $this->name = $name;
        $this->email = $email;
        $this->phone = $phone;
        $this->iban = $iban;
        $this->secretWord = $secretWord;
    }

    public function __toString(){
        return "Client Information: <br>" .
            "Name: " . $this->name . "<br>" .
            "Email: " . $this->email . "<br>" .
            "Phone: " . $this->phone . "<br>" .
            "IBAN: " . $this->iban . "<br>" .
            "Secret Word: " . $this->secretWord . "<br>";
    }
}

?>