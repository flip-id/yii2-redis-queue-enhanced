<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace flip_id\yii2_queue\serializers;

use flip_id\yii2_queue\JobInterface;

/**
 * Serializer Interface.
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
interface SerializerInterface
{
    /**
     * @param JobInterface|mixed $job
     * @return string
     */
    public function serialize($job);

    /**
     * @param string $serialized
     * @return JobInterface
     */
    public function unserialize($serialized);
}
