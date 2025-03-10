<?php

namespace App;

abstract class ComputerDecorator implements Computer {
    protected Computer $computer;

    public function __construct(Computer $computer) {
        $this->computer = $computer;
    }

    abstract public function getPrice(): int;
    abstract public function getDescription(): string;
}