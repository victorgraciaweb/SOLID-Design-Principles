<?php

namespace ISP;

class TurnOnCarService
{
    private AbrirPuertas $abrirPuertas;
    private Radio $radio;
    private Velocidad $velocidad;

    public function __construct(
        AbrirPuertas $abrirPuertas,
        Radio $radio,
        Velocidad $velocidad
    )
    {
        $this->abrirPuertas = $abrirPuertas;
        $this->radio = $radio;
        $this->velocidad = $velocidad;
    }

    public function __invoke()
    {
        $this->abrirPuertas->abrir();
        $this->radio->encender();
        $this->velocidad->acelerar();
    }
}