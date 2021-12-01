<?php

namespace App\Repository;

use App\Entity\Property;
use App\Entity\PropertySearch;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;
use Doctrine\ORM\Query;
use Doctrine\Persistence\ManagerRegistry;

/**
 * @method Property|null find($id, $lockMode = null, $lockVersion = null)
 * @method Property|null findOneBy(array $criteria, array $orderBy = null)
 * @method Property[]    findAll()
 * @method Property[]    findBy(array $criteria, array $orderBy = null, $limit = null, $offset = null)
 */
class PropertyRepository extends ServiceEntityRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        parent::__construct($registry, Property::class);
    }

    /**
     * @return Query
     */
    public function findAllVisibleQuery(PropertySearch $search) :Query
    {
        $query = $this->findVisibleQuery();

        if($search->getMaxPrice()) {
            $query = $query
                ->andWhere('p.price <= :maxprice')
                ->setParameter('maxprice', $search->getMaxPrice());
        }

        if($search->getMinSurface()) {
            $query = $query
                ->andWhere('p.surface >= :minsurface')
                ->setParameter('minsurface', $search->getMinSurface());
        }

        if ($search->getOptions()->count() > 0){
            foreach($search->getOptions() as $k => $option){
                $query = $query
                    ->andWhere(":option$k MEMBER OF p.options")
                    ->setParameter("option$k", $option);
            }
        }
        if ($search->getAgences()->count() >0){
            foreach($search->getAgences() as $k => $agence){
                $query = $query
                    ->andWhere(":agence$k MEMBER OF p.agences")
                    ->setParameter("agence$k", $agence);
            }
        }

        return $query->getQuery();
    }

    /**
     * @return Property[]
     */
    public function findLastest(): array
    {
        return $this->createQueryBuilder('p')
            ->where('p.sold = false')
            //->setMaxResults(4)
            ->getQuery()
            ->getResult();
    }

    private function findVisibleQuery()
    {
        return $this->createQueryBuilder('p')
            ->where('p.sold = false');
    }
}
?> 