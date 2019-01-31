<?php
/**
 * Created by PhpStorm.
 * User: root
 * Date: 30/01/19
 * Time: 12:00
 */

namespace App\Repository;

use App\Entity\AlmiUsuariosJuego;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Symfony\Bridge\Doctrine\RegistryInterface;


class UsuariosJuegoRepository extends ServiceEntityRepository
{
    public function __construct(RegistryInterface $registry)
    {
        parent::__construct($registry, AlmiUsuariosJuego::class);
    }

    public function findAllByName($nombre): array
    {
        $entityManager = $this->getEntityManager();


        $query = $entityManager->createQuery(
            "SELECT al FROM App\Entity\AlmiUsuariosJuego al
        WHERE al.name like :nombre
                ORDER BY al.name ASC"
        )->setParameter('nombre', '%'.$nombre.'%');


        return $query->execute();
    }


}