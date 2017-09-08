<?php
namespace Movies\Infrastructure\Repository\Doctrine;

use Doctrine\ORM\EntityRepository;

/**
 * Class ORMMovieRepository
 *
 * @package Movies/Infrastructure/Repository/Doctrine
 */
class ORMMovieRepository extends EntityRepository
{
    /**
     * @param int $length
     *
     * @return array
     */
    public function getList(int $length): array
    {
        return $this->createQueryBuilder('m')
            ->select('m.id, m.title, m.description, m.imageUrl')
            ->setMaxResults($length)
            ->getQuery()
            ->getArrayResult();
    }

    /**
     * @param int $id
     *
     * @return null|array
     */
    public function getMovie(int $id): ?array
    {
        return $this->createQueryBuilder('m')
            ->select('m.id, m.title, m.description, m.sourceUrl, m.price')
            ->where('m.id = :id')
            ->setParameter('id', $id)
            ->getQuery()
            ->getSingleResult();
    }
}