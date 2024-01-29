<?php

namespace ISP;

class TurnOffCarService
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
        $this->abrirPuertas->cerrar();
        $this->radio->apagar();
        $this->velocidad->frenar();
    }
}