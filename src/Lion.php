<?php

namespace AlexanderZabornyi\VisitorTest;

class Lion implements Animal
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
        return $operation->visitLion($this);
    }

    /**
     * Рев
     *
     * @return string
     */
    public function roar(): string
    {
        return 'Roaaar!';
    }
}