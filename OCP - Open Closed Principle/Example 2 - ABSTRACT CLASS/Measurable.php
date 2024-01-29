<?php

abstract class Measurable
{
    abstract function getTotalLength();
    abstract function getSentLength();

    public function getSentLengthPercentage() {
        return $this->getSentLength() * 100 / $this->getTotalLength();
    }
}