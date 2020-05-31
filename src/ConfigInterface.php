<?php

namespace App;


interface ConfigInterface {

    /**
     * Возвращает timestamp создания экземпляра класса
     * @return int
     */
    public function getTimestamp(): int;

    /**
     * Возвращает переменную окружения $variable
     * @param $variable
     * @return string
     */
    public function get($variable): string;
}