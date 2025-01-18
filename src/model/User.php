<?php
namespace App\Model;

class User
{
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName(): mixed {
        return $this->name;
    }

    public function getEmail() : mixed {
        return $this->email;
    }
}
