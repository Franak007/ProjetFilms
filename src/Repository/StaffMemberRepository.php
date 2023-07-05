<?php

namespace App\Repository;

use App\Entity\StaffMember;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @extends ServiceEntityRepository<StaffMember>
 *
 * @method StaffMember|null find($id, $lockMode = null, $lockVersion = null)
 * @method StaffMember|null findOneBy(array $criteria, array $orderBy = null)
 * @method StaffMember[]    findAll()
 * @method StaffMember[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class StaffMemberRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, StaffMember::class);
    }

    public function save(StaffMember $entity, bool $flush = false): void
    {
        $this->getEntityManager()->persist($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

    public function remove(StaffMember $entity, bool $flush = false): void
    {
        $this->getEntityManager()->remove($entity);

        if ($flush) {
            $this->getEntityManager()->flush();
        }
    }

}
