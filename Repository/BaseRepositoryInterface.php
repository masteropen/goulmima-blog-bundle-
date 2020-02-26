<?php

/*
 * This file is part of the GoulmimaBlogBundle package.
 *
 * (c) Majid Noureddine <noureddine.digitalworks@gmail.com>
 *
 */

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
     * This function should respect output bellow :
     *
     * return [
     *    ['date' => '2020-03-27', 'value' => 12],
     *    ['date' => '2020-03-28', 'value' => 15]
     *    // ...
     * ]
     *
     * @return array
     */
    public function countItemsByDate();
}
