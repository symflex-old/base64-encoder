<?php

namespace Symflex\Component\Base64;

/**
 * Interface Encoder
 * @package Symflex\Component\Base64
 */
interface Encoder
{
    public const REMAINDER_SYMBOL = '=';

    public const REPLACE_DECODE = [
        '-' => '+',
        '_' => '/'
    ];

    public const REPLACE_ENCODE = [
        '+' => '-',
        '/' => '_'
    ];

    /**
     * @param string $data
     * @return string
     */
    public function encode(string $data): string;

    /**
     * @param string $data
     * @return string
     */
    public function decode(string $data): string;
}
