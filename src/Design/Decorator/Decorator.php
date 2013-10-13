<?php namespace Design\Decorator;

abstract class Decorator extends Component {
    protected  $wrappedObj;

    public function __construct(Component $component)
    {
        $this->wrappedObj = $component;
    }
}