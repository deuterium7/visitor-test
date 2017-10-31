<?php

namespace AlexanderZabornyi\VisitorTest;

class Monkey implements Animal
{
    /**
     * Принять операцию
     *
     * @param AnimalOperation $operation
     *
     * @return string
     */
    public function accept(AnimalOperation $operation)
    {
        return $operation->visitMonkey($this);
    }

    /**
     * Окрик
     *
     * @return string
     */
    public function shout(): string
    {
        return 'Ooh oo aa aa!';
    }
}