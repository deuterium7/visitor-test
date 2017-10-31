<?php

namespace AlexanderZabornyi\VisitorTest;

class Speak implements AnimalOperation
{
    /**
     * Посетить льва
     *
     * @param Lion $lion
     *
     * @return string
     */
    public function visitLion(Lion $lion): string
    {
        return $lion->roar();
    }

    /**
     * Посетить обезьяну
     *
     * @param Monkey $monkey
     *
     * @return string
     */
    public function visitMonkey(Monkey $monkey): string
    {
        return $monkey->shout();
    }
}