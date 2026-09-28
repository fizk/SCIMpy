<?php

use App\Handler\UnsupportedResourceTypeHandler;
use App\Resource\Domain\{
    Handler\DomainHandler, 
    Handler\DomainsHandler
};
use App\Resource\Group\{
    Handler\GroupHandler, 
    Handler\GroupsHandler
};
use App\Resource\ResourceType\{
    Handler\ResourceTypesHandler
};
use App\Resource\Schema\{
    Handler\SchemasHandler
};
use App\Resource\ServiceProviderConfig\{
    Handler\ServiceProviderConfigHandler
};
use App\Resource\User\{
    Handler\UserHandler, 
    Handler\UsersHandler,
    Repository\UserRepository,
};
use Scimpy\ServiceProviderConfig\{
    Service\ResourceTypesService,
    Service\ResourceTypesServiceInterface,
};
use Scimpy\User\{
    Service\UserService,
    Repository\UserRepositoryInterface,
};
use Psr\Container\ContainerInterface;

return [

    'User' => [
        UsersHandler::class => function (ContainerInterface $container) {
            if (!$container->get(ResourceTypesServiceInterface::class)->isSupported('User')){
                return new UnsupportedResourceTypeHandler();
            }

            return new UsersHandler()
                ->setUserService($container->get(UserService::class))
            ;
        },
        UserHandler::class => function (ContainerInterface $container) {
            if (!$container->get(ResourceTypesServiceInterface::class)->isSupported('User')){
                return new UnsupportedResourceTypeHandler();
            }
            
            return new UserHandler()
                ->setUserService($container->get(UserService::class))
            ;
        },
        UserService::class => function (ContainerInterface $container) {
            return new UserService()
                ->setRepository($container->get(UserRepositoryInterface::class))
            ;
        },
        UserRepositoryInterface::class => function (ContainerInterface $container) {
            return new UserRepository()
                ->setPDO($container->get(PDO::class))
            ;
        },
    ],
    'Group' => [
        GroupHandler::class => function (ContainerInterface $container) {
            if (!$container->get(ResourceTypesServiceInterface::class)->isSupported('Group')){
                return new UnsupportedResourceTypeHandler();
            }
            
            return new GroupHandler();
        },
        GroupsHandler::class => function (ContainerInterface $container) {
            if (!$container->get(ResourceTypesServiceInterface::class)->isSupported('Group')){
                return new UnsupportedResourceTypeHandler();
            }
            
            return new GroupsHandler();
        },
    ],
    'Domain' => [
        DomainHandler::class => function (ContainerInterface $container) {
            return new DomainHandler();
        },
        DomainsHandler::class => function (ContainerInterface $container) {
            return new DomainsHandler();
        },
    ],
    'ResourceTypes' => [
        ResourceTypesHandler::class => function (ContainerInterface $container) {
            return new ResourceTypesHandler();
        },
    ],
    'Schemas' => [
        SchemasHandler::class => function (ContainerInterface $container) {
            return new SchemasHandler();
        }
    ],
    'ServiceProviderConfig' => [
        ServiceProviderConfigHandler::class => function (ContainerInterface $container) {
            return new ServiceProviderConfigHandler();
        },
    ],

    // - - - - - - - - - - - - - - - - - - - - - - - - 
    // - - - - - - - - - - - - - - - - - - - - - - - - 
    // - - - - - - - - - - - - - - - - - - - - - - - - 

    'Config' => [
        ResourceTypesServiceInterface::class => function () {
            return new ResourceTypesService(['User', 'Group']);
        },
    ],
    'utilities' => [
        PDO::class => function () {
            $pdo = new PDO('sqlite:database.db');

            $pdo->exec("CREATE TABLE IF NOT EXISTS users (
                id INTEGER PRIMARY KEY AUTOINCREMENT, 
                name TEXT, 
                email TEXT
            )");

            return $pdo;
        },
    ]
];