<?php

use Design\Singleton\Singleton;

class SingletonTest extends PHPUnit_Framework_TestCase {

    public function testSingletonSingles()
    {
        $singleton = Singleton::instance();

        $this->assertInstanceOf('Design\Singleton\Singleton', $singleton);
    }

    public function testGetSetValue()
    {
        $singleton = Singleton::instance();

        $singleton->setValue('bar');

        $this->assertEquals('bar', $singleton->getValue());
    }

    public function testSingletonReturnsSameInstance()
    {
        $singleton1 = Singleton::instance();
        $singleton1->setValue('foo');

        $singleton2 = Singleton::instance();

        $this->assertEquals('foo', $singleton2->getValue());
    }

}