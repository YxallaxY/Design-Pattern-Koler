<?php

namespace App;

use SplSubject;
use SplObserver;
use SplObjectStorage;

class MusicBand implements SplSubject {
    private $name;
    private $observers;
    private $events = [];

    public function __construct($name) {
        $this->name = $name;
        $this->observers = new SplObjectStorage();
    }

    public function attach(SplObserver $observer) {
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer) {
        $this->observers->detach($observer);
    }

    public function notify() {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function addNewConcertDate($date, $location) {
        $this->events[] = ['date' => $date, 'location' => $location];
        $this->notify();
    }

    public function getName() {
        return $this->name;
    }
}