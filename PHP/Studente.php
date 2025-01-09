<?php
require_once 'Volontario.php';
class Studente extends Persona implements Volontario
{
    public function __construct(string $name, int $age, string $email, private string $scuola)
    {
        parent::__construct($name, $age, $email);
    }

    public function getScuola(): string
    {
        return $this->scuola;
    }

    public function setScuola(string $scuola): string
    {
        $this->scuola = $scuola;
    }

    public function introduce()
    {
        return parent::introduce()."Scuola: {$this->scuola}";
    }

    public function toDo():string
    {
        return "ni kan ni ma ne";
    }
}