<?php

namespace OCP;

interface IMeasurable
{
    public function getTotalLength(): void;
    public function getSentLength(): void;
}