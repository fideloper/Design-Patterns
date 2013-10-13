<?php namespace Design\Observer;

class ConcreteObserverB implements ObserverInterface {

    public function update(array $data)
    {
        echo "Observer B haz data\n";
    }

}