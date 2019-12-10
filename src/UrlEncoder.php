<?php


namespace Symflex\Component\Base64;

/**
 * Class UrlEncoder
 * @package Symflex\Component\Base64
 */
class UrlEncoder implements Encoder
{
    /**
     * @param string $data
     * @return string
     */
    public function encode(string $data): string
    {
        return str_replace(self::REMAINDER_SYMBOL, '', strtr(base64_encode($data), self::REPLACE_ENCODE));
    }

    /**
     * @param string $data
     * @return string
     */
    public function decode(string $data): string
    {
        return base64_decode(str_pad(strtr($data, self::REPLACE_DECODE), strlen($data) % 4, '=',), true);
    }
}
