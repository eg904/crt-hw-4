<?php

namespace App;

class PrefixedConfig implements ConfigInterface
{
    private ConfigClass $config;

    /**
     * @var string
     */
    private string $prefix;

    public function __construct(ConfigClass $config, $prefix = '')
    {
        $this->config = $config;
        $this->prefix = $prefix;
    }

    public function getTimestamp(): int
    {
        return $this->config->getTimestamp();
    }

    public function get($variable): string
    {
        return $this->prefix . $this->config->get($variable);
    }
}