<?php

use Design\Observer\ConcreteSubject;
use Design\Observer\ConcreteObserverA;
use Design\Observer\ConcreteObserverB;

class ObserverTest extends PHPUnit_Framework_TestCase {

    public function testObserverOutput()
    {
        $sbj = new ConcreteSubject;
        $obsa = new ConcreteObserverA;
        $obsb = new ConcreteObserverB;

        $sbj->registerObserver($obsa);
        $sbj->registerObserver($obsb);

        $expected = "Observer A haz data\nObserver B haz data\n";

        ob_start();
        $sbj->notifyObservers();
        $result = ob_get_contents();
        ob_end_clean();

        $this->assertEquals($expected, $result);
    }

    public function testObserverRemoved()
    {
        $sbj = new ConcreteSubject;
        $obsa = new ConcreteObserverA;
        $obsb = new ConcreteObserverB;

        $sbj->registerObserver($obsa);
        $sbj->registerObserver($obsb);
        $sbj->removeObserver($obsa);

        $expected = "Observer B haz data\n";

        ob_start();
        $sbj->notifyObservers();
        $result = ob_get_contents();
        ob_end_clean();

        $this->assertEquals($expected, $result);
    }

}