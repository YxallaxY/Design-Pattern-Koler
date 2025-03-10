<?php

namespace App;

use SplObserver;
use SplSubject;

class User implements SplObserver {
    private $name;
    private $notifications = [];
    private $notified = false;

    public function __construct($name) {
        $this->name = $name;
    }

    public function update(SplSubject $subject) {
        $this->notifications[] = "New event added to " . $subject->getName();
        $this->notified = true;
    }

    public function getNotifications() {
        return $this->notifications;
    }

    public function isNotified() {
        return $this->notified;
    }
}