<?php

namespace AlexanderZabornyi\VisitorTest\Tests;

use AlexanderZabornyi\VisitorTest\Lion;
use AlexanderZabornyi\VisitorTest\Monkey;
use AlexanderZabornyi\VisitorTest\Speak;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    public function testCanAnimalSpeakWithSpeakVisitor()
    {
        $speak = new Speak();

        $lion = new Lion();
        $monkey = new Monkey();

        $this->assertEquals('Roaaar!', $lion->accept($speak));
        $this->assertEquals('Ooh oo aa aa!', $monkey->accept($speak));
    }
}