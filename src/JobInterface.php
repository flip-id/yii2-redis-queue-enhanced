<?php
/**
 * @link http://www.yiiframework.com/
 * @copyright Copyright (c) 2008 Yii Software LLC
 * @license http://www.yiiframework.com/license/
 */

namespace flip_id\yii2_queue;

/**
 * Job Interface.
 *
 * @author Roman Zhuravlev <zhuravljov@gmail.com>
 */
interface JobInterface
{
    /**
     * @param Queue $queue which pushed and is handling the job
     * @return void|mixed result of the job execution
     */
    public function execute($queue);
}
