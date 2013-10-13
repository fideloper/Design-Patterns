<?php namespace Design\Decorator;

abstract class Component {

    protected $action = "something";

    public function doAction()
    {
        return "Doing ".$this->action;
    }

}