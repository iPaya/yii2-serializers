<?php
/**
 * @link http://ipaya.cn/
 * @copyright Copyright (c) 2016 ipaya.cn
 */

namespace iPaya\Serializers;


use function serialize;
use function unserialize;

/**
 * Class PhpSerializer
 * @package iPaya\Serializers
 */
class PhpSerializer implements SerializerInterface
{
    /**
     * @inheritDoc
     */
    public function serialize($value)
    {
        return serialize($value);
    }

    /**
     * @inheritDoc
     */
    public function unserialize($serialized)
    {
        return unserialize($serialized);
    }

}
