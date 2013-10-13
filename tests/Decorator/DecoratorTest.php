<?php

use Design\Decorator\ConcreteComponent;
use Design\Decorator\ConcreteDecoratorA;
use Design\Decorator\ConcreteDecoratorB;

class DecoratorTest extends PHPUnit_Framework_TestCase {

    public function testDecoratorsDecorate()
    {
        $com = new ConcreteComponent;
        $com = new ConcreteDecoratorA($com);
        $com = new ConcreteDecoratorB($com);

        $expected = "Doing something, A, B";
        $actual = $com->doAction();

        $this->assertEquals($expected, $actual);
    }

}