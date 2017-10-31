<?php

namespace AlexanderZabornyi\VisitorTest;

interface Animal
{
    public function accept(AnimalOperation $operation);
}