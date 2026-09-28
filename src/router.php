<?php

use App\Resource\Domain\Handler\{DomainHandler, DomainsHandler};
use App\Resource\Group\Handler\{GroupHandler, GroupsHandler};
use App\Resource\ResourceType\Handler\ResourceTypesHandler;
use App\Resource\Schema\Handler\SchemasHandler;
use App\Resource\ServiceProviderConfig\Handler\ServiceProviderConfigHandler;
use App\Resource\User\Handler\{UserHandler, UsersHandler};

return [
    'User' => [
        '/^\/Users\/(?<id>[a-z0-9-_]+)$/i' => UserHandler::class,
        '/^\/Users$/i' => UsersHandler::class,
    ],
    'Group' => [
        '/^\/Groups\/(?<id>[a-z0-9-_]+)$/i' => GroupHandler::class,
        '/^\/Groups$/i' => GroupsHandler::class
    ],
    'Domain' => [
        '/^\/Domains\/(?<id>[a-z0-9-_]+)$/i' => DomainHandler::class,
        '/^\/Domains$/i' => DomainsHandler::class
    ],
    'ResourceTypes' => [
        '/^\/ResourceTypes$/i' => ResourceTypesHandler::class
    ],
    'Schemas' => [
        '/^\/Schemas$/i' => SchemasHandler::class
    ],
    'ServiceProviderConfig' => [
        '/^\/ServiceProviderConfig$/i' => ServiceProviderConfigHandler::class
    ],
];