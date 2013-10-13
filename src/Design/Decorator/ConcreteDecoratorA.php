<?php namespace Design\Decorator;

class ConcreteDecoratorA extends Decorator {

    public function doAction()
    {
        return $this->wrappedObj->doAction() . ", "."A";
    }
}