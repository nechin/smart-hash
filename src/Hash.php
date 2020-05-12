<?php

namespace Nechin\SmartHash;

use Exception;

/**
 * Class Hash
 *
 * @package Nechin\SmartHash
 */
class SmartHash
{
    CONST DEFAULT_LENGTH = 32;
    CONST DEFAULT_ALGORITHM = 'ripemd128';

    private $algorithm;

    /**
     * Hash constructor.
     */
    public function __construct()
    {
        $this->algorithm = new Algorithms();
    }

    /**
     * @param $length
     * @param $algorithm
     *
     * @throws Exception
     */
    private function check($length, $algorithm)
    {
        if ($length && !$this->algorithm->isLengthExists($length)) {
            throw new Exception('There is no available length');
        }

        if ($algorithm && !$this->algorithm->isAlgorithmExists($algorithm)) {
            throw new Exception('There is no available algorithm');
        }
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
     *
     * @return string
     */
    public function generate($data, $length = self::DEFAULT_LENGTH, $algorithm = self::DEFAULT_ALGORITHM)
    {
        if ('' === $data) {
            return '';
        }

        self::check($length, $algorithm);

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
