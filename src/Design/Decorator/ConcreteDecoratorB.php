<?php namespace Design\Decorator;

class ConcreteDecoratorB extends Decorator {

    public function doAction()
    {
        return $this->wrappedObj->doAction() . ", "."B";
    }
}