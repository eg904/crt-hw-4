<?php

namespace App;


use Symfony\Component\Dotenv\Dotenv;

class ConfigClass implements ConfigInterface
{

    private static $instance = null;

    /**
     * @var int
     */
    public static int $timestamp;

    public static function getInstance()
    {
        if (self::$instance) {
            return self::$instance;
        }
        self::$timestamp = time();
        $dotenv = new Dotenv();
        $dotenv->load(__DIR__ . '/../.env');
        return new self;
    }

    /**
     * @return int
     */
    public function getTimestamp(): int
    {
        return self::$timestamp;
    }

    /**
     * @param $variable
     * @return string
     */
    public function get($variable): string
    {
        return array_key_exists($variable, $_ENV) ? $_ENV[$variable] : '';
    }

    protected function __construct()
    {
    }

    protected function __clone()
    {
    }
}