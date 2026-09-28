<?php

namespace Scimpy\Event;

use Psr\EventDispatcher\EventDispatcherInterface;

trait EventDispatcherAwareTrait
{
    private ?EventDispatcherInterface $eventDispatcherInterface = null;

    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher): static
    {
        $this->eventDispatcherInterface = $eventDispatcher;
        return $this;
    }

    public function getEventDispatcher(): EventDispatcherInterface
    {
        if (!$this->eventDispatcherInterface) {
            $this->eventDispatcherInterface = new class implements EventDispatcherInterface
            {
                public function dispatch(object $event)
                {

                }
            };
        }

        return $this->eventDispatcherInterface;
    }
}