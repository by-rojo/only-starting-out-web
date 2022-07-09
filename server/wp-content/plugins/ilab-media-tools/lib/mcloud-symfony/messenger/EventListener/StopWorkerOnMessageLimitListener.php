<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace MediaCloud\Vendor\Symfony\Component\Messenger\EventListener;
use MediaCloud\Vendor\Psr\Log\LoggerInterface;
use MediaCloud\Vendor\Symfony\Component\EventDispatcher\EventSubscriberInterface;
use MediaCloud\Vendor\Symfony\Component\Messenger\Event\WorkerRunningEvent;
use MediaCloud\Vendor\Symfony\Component\Messenger\Exception\InvalidArgumentException;

/**
 * @author Samuel Roze <samuel.roze@gmail.com>
 * @author Tobias Schultze <http://tobion.de>
 */
class StopWorkerOnMessageLimitListener implements EventSubscriberInterface
{
    private $maximumNumberOfMessages;
    private $logger;
    private $receivedMessages = 0;

    public function __construct(int $maximumNumberOfMessages, LoggerInterface $logger = null)
    {
        $this->maximumNumberOfMessages = $maximumNumberOfMessages;
        $this->logger = $logger;

        if ($maximumNumberOfMessages <= 0) {
            throw new InvalidArgumentException('Message limit must be greater than zero.');
        }
    }

    public function onWorkerRunning(WorkerRunningEvent $event): void
    {
        if (!$event->isWorkerIdle() && ++$this->receivedMessages >= $this->maximumNumberOfMessages) {
            $this->receivedMessages = 0;
            $event->getWorker()->stop();

            if (null !== $this->logger) {
                $this->logger->info('Worker stopped due to maximum count of {count} messages processed', ['count' => $this->maximumNumberOfMessages]);
            }
        }
    }

    public static function getSubscribedEvents()
    {
        return [
            WorkerRunningEvent::class => 'onWorkerRunning',
        ];
    }
}
