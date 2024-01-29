<?php

class Mamifero
{
    public function andar(): string
    {
        return "andando";
    }
}


class Persona extends Mamifero
{
    public function andar(): string
    {
        return "andando mamifero";
    }
}

class Tituron extends Mamifero
{
    public function andar(): string
    {
        throw new \mysql_xdevapi\Exception("Error");
    }
}
