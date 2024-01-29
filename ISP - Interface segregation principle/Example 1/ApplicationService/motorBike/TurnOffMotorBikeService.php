<?php

namespace ISP;

class TurnOffMotorBikeService
{
    private CascoProteccion $cascoProteccion;
    private Velocidad $velocidad;

    public function __construct(
        CascoProteccion $cascoProteccion,
        Velocidad $velocidad
    )
    {
        $this->cascoProteccion = $cascoProteccion;
        $this->velocidad = $velocidad;
    }

    public function __invoke()
    {
        $this->cascoProteccion->desabrochar();
        $this->velocidad->frenar();
    }
}