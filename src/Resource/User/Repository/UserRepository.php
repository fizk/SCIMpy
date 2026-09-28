<?php

namespace App\Resource\User\Repository;

use App\Adapter\DatabaseAwareInterface;
use App\Adapter\DatabaseAwareTrait;
use Scimpy\User\Model\AddressModel;
use Scimpy\User\Model\EmailModel;
use Scimpy\User\Model\MetaModel;
use Scimpy\User\Model\NameModel;
use Scimpy\User\Model\PhoneNumberModel;
use Scimpy\User\Model\UserModel;
use DateTimeImmutable;
use PDO;
use Scimpy\User\Repository\UserRepositoryInterface;

class UserRepository implements UserRepositoryInterface, DatabaseAwareInterface
{
    use DatabaseAwareTrait;
    
    /** @return UserModel[] */
    public function getAll(): array
    {
        $statement = $this->getPDO()->prepare(
            'SELECT * from users'
        );
        $statement->execute();

        $objects = $statement->fetchAll(PDO::FETCH_ASSOC);

        return array_map(function ($object) {
            return new UserModel()
                ->setId($object['id'])
                ->setExternalId('some-service')
                ->setMeta(new MetaModel()
                    ->setCreated(new DateTimeImmutable())
                    ->setLastModified(new DateTimeImmutable())
                )
                ->setName(new NameModel())
                ->setAddresses([])
                ->setEmails([])
                ->setPhoneNumbers([])
                
            ;
        }, $objects); 
    }

    public function getAllCount(): int
    {
        $statement = $this->getPDO()->prepare(
            'SELECT COUNT(*) as total from users'
        );
        $statement->execute();

        $objects = $statement->fetch(PDO::FETCH_ASSOC);
        return $objects['total'];
    }

    public function getOneById(mixed $id): ?UserModel
    {
        $statement = $this->getPDO()->prepare(
            'SELECT * from users WHERE id = :id '
        );
        $statement->execute(['id' => $id]);

        $object = $statement->fetch(PDO::FETCH_ASSOC);

        if (!$object) {
            return null;
        }

        $user = new UserModel()
            ->setId($object['id'])
            ->setExternalId('some-service')
            ->setName(new NameModel()
                ->setGivenName($object['name'])
            )
            ->setMeta(new MetaModel()
                ->setCreated(new DateTimeImmutable())
                ->setLastModified(new DateTimeImmutable())
            )
            ->setAddresses([new AddressModel()])
            ->setEmails([new EmailModel()->setValue($object['email'])])
            ->setPhoneNumbers([new PhoneNumberModel()->setValue('123 1234')])
            ->setUserName(null)
            ->setDisplayName(null)
            ->setNickName(null)
            ->setProfileUrl(null)
            ->setUserType(null)
            ->setTitle(null)
            ->setDepartment(null)
            ->setActive(true)
        ;

        return $user;
    }

    public function create(UserModel $user): ?UserModel
    {
        return null;
    }

    public function update(mixed  $id, UserModel $user): ?UserModel
    {
        return null;
    }
    
    public function delete(mixed $id): bool
    {
        $statement = $this->getPDO()->prepare(
            'DELETE FROM users WHERE id = :id'
        );
        $statement->execute(['id' => $id]);

        return $statement->rowCount() > 0;
    }
}