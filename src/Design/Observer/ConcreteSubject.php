<?php namespace Design\Observer;

class ConcreteSubject implements SubjectInterface {

    protected $observers;

    public function __construct()
    {
        $this->observers = new \SplObjectStorage;
    }

    public function registerObserver(ObserverInterface $observer)
    {
        $this->observers->attach($observer);
    }

    public function removeObserver(ObserverInterface $observer)
    {
        $this->observers->detach($observer);
    }

    public function notifyObservers()
    {
        foreach($this->observers as $observer)
        {
            $observer->update( $this->getData() );
        }
    }

    protected function getData()
    {
        return array(
            'foo' => 'bar'
        );
    }

}