<?php

namespace App;

class Config {
    private static ?Config $instance = null;
    private array $settings = [];

    private function __construct() {
        $this->settings = require __DIR__ . '/../config/config.php';
    }

    public static function getInstance(): ?Config
    {
        if (self::$instance === null) {
            self::$instance = new Config();
        }
        return self::$instance;
    }

    public function set($key, $value): void
    {
        $this->settings[$key] = $value;
    }

    public function get($key) {
        return $this->settings[$key] ?? null;
    }
}