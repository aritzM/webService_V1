<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 24/01/19
 * Time: 14:00
 */

namespace App\Repository;

use App\Entity\FosUser;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


class UserRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, FosUser::class);
    }

    public function findAllByName($nombre): array
    {
        $entityManager = $this->getEntityManager();


        $query = $entityManager->createQuery(
            "SELECT al FROM App\Entity\FosUser al
        WHERE al.name like :nombre
                ORDER BY al.name ASC"
        )->setParameter('nombre', '%'.$nombre.'%');


        return $query->execute();
    }

}