<?php

final class Progress
{
    public function getSentLengthPercentage(Measurable $measurable)
    {
        return $measurable->getSentLength() * 100 / $measurable->getTotalLength();
    }
}