<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 */

namespace iPaya\Serializers;

/**
 * Interface SerializerInterface
 * @package iPaya\Serializers
 */
interface SerializerInterface
{
    /**
     * @param mixed $value
     * @return string
     */
    public function serialize($value);

    /**
     * @param string $serialized
     * @return mixed
     */
    public function unserialize($serialized);
}
