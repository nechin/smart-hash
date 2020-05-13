<?php

namespace Nechin\SmartHash;

/**
 * Class Generator
 * @package Nechin\SmartHash
 */
class Generator
{
    CONST DEFAULT_LENGTH = 32;
    CONST DEFAULT_ALGORITHM = 'ripemd128';

    private $algorithm;

    /**
     * Hash constructor.
     */
    public function __construct()
    {
        $this->algorithm = new Algorithm();
    }

    /**
     * @param $data
     * @param $length
     * @param $algorithm
     * @return bool
     */
    private function check($data, $length, $algorithm)
    {
        if ('' === $data) {
            return false;
        }

        if ($length) {
            return $this->algorithm->isLengthExists($length);
        }

        if ($algorithm && !$this->algorithm->isAlgorithmExists($algorithm)) {
            return false;
        }

        return true;
    }

    /**
     * @param $length
     *
     * @return mixed
     */
    private function getAlgorithm($length)
    {
        return $this->algorithm->getByLength($length);
    }

    /**
     * @param $data
     * @param int $length
     * @param string $algorithm
     * @return string
     */
    public function generate($data, $length, $algorithm)
    {
        if (!$this->check($data, $length, $algorithm)) {
            return '';
        }

        if (is_numeric($length)) {
            $algorithm = self::getAlgorithm($length);
            return hash($algorithm, $data);
        }

        if ($algorithm) {
            return hash($algorithm, $data);
        }

        return hash(self::DEFAULT_ALGORITHM, $data);
    }
}
