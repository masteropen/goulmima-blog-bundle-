<?php

namespace Goulmima\BlogBundle\Repository;

use App\Entity\BlogPost;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

/**
 * All aggregate entities must define functions bellow.
 *
 * Interface BaseRepositoryInterface
 * @package Goulmima\BlogBundle\Repository
 */
interface BaseRepositoryInterface
{
    /**
     * @example return [ ['date' => '2020-03-27', 'value' => 12] ... ]
     *
     * @param $unity
     * @return array
     */
    public function countItemsByDate();
}
