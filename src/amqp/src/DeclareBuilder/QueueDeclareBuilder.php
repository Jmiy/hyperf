<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://hyperf.org
 * @document https://wiki.hyperf.org
 * @contact  group@hyperf.org
 * @license  https://github.com/hyperf-cloud/hyperf/blob/master/LICENSE
 */

namespace Hyperf\Amqp\DeclareBuilder;

class QueueDeclareBuilder extends DeclareBuilder
{
    protected $queue;

    protected $exclusive = false;

    protected $arguments = [
        'x-ha-policy' => ['S', 'all'],
    ];

    public function getQueue(): string
    {
        return $this->queue;
    }

    public function setQueue(string $queue): QueueDeclareBuilder
    {
        $this->queue = $queue;
        return $this;
    }

    public function isExclusive(): bool
    {
        return $this->exclusive;
    }

    public function setExclusive(bool $exclusive): QueueDeclareBuilder
    {
        $this->exclusive = $exclusive;
        return $this;
    }
}
