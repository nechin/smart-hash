<?php

namespace Nechin\SmartHash;

/**
 * Class Algorithms
 *
 * @package Nechin\SmartHash
 */
class Algorithms
{
    /**
     * Supported algorithms by length
     * @return array
     */
    public function getAvailable()
    {
        return [
            8 => 'crc32b',
            16 => 'fnv1a64',
            32 => 'ripemd128',
            40 => 'sha1',
            48 => 'tiger192,4',
            56 => 'haval224,5',
            64 => 'ripemd256',
            80 => 'ripemd320',
            96 => 'sha384',
            128 => 'sha512'
        ];
    }

    /**
     * @param $length
     *
     * @return mixed
     */
    public function getByLength($length)
    {
        $available = $this->getAvailable();
        return $available[$length];
    }

    /**
     * @param $length
     *
     * @return bool
     */
    public function isLengthExists($length)
    {
        $available = $this->getAvailable();
        return isset($available[$length]);
    }

    /**
     * @param $name
     *
     * @return bool
     */
    public function isAlgorithmExists($name)
    {
        $algorithms = hash_algos();
        return false !== array_search($name, $algorithms);
    }
}