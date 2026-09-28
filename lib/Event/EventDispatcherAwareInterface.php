<?php

namespace Scimpy\Event;

use Psr\EventDispatcher\EventDispatcherInterface;

interface EventDispatcherAwareInterface
{
    public function setEventDispatcher(EventDispatcherInterface $eventDispatcher): static;
    public function getEventDispatcher(): EventDispatcherInterface;
}