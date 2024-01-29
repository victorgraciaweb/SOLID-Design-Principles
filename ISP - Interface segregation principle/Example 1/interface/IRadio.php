<?php

namespace ISP;

interface IRadio
{
    public function encender(): void;
    public function apagar(): void;
    public function cambiarEmisora(Emisora $emisora): void;
}