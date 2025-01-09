<?php

class Persona
{
    const PREFER_COLOR = 'red';
    public function __construct(protected string $name, protected int $age, protected string $email)
    {

    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function getAge(): int
    {
        return $this->age;
    }

    public function setAge(int $age): void
    {
        $this->age = $age;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    public function introduce()
    {
        return "Name: {$this->name}, Eta: {$this->age}, Email: {$this->email}, Color: ".self::PREFER_COLOR;
    }
}