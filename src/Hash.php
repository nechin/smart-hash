<?php

namespace Nechin\SmartHash;

/**
 * Class SmartHash
 * @package Nechin\SmartHash
 */
class SmartHash
{
    /**
     * @var Generator
     */
    private static $instance;

    /**
     * @return Generator
     */
    public static function getInstance()
    {
        if (!isset(self::$instance)) {
            self::$instance = new Generator();
        }

        return self::$instance;
    }

    /**
     * @param $data
     * @param int $length
     * @param string $algorithm
     * @return string
     */
    public static function hash($data, $length = Generator::DEFAULT_LENGTH, $algorithm = Generator::DEFAULT_ALGORITHM)
    {
        return self::getInstance()->generate($data, $length, $algorithm);
    }
}
