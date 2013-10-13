<?php namespace Design\Observer;

class ConcreteObserverA implements ObserverInterface {

    public function update(array $data)
    {
        echo "Observer A haz data\n";
    }

}