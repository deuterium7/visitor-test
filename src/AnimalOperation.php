<?php

namespace AlexanderZabornyi\VisitorTest;

interface AnimalOperation
{
    public function visitMonkey(Monkey $monkey): string;

    public function visitLion(Lion $lion): string;
}