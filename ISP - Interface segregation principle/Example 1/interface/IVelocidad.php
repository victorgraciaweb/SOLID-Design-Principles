<?php

namespace ISP;

interface IVelocidad
{
    public function acelerar(): void;
    public function frenar(): void;
    public function girar(Direccion $direccion): void;
}