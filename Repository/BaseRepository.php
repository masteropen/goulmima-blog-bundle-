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
 * Allow using Symfony Entity Repositories and implementing specific stats functions.
 *
 * Class BaseRepository
 * @package Goulmima\BlogBundle\Repository
 */
abstract class BaseRepository extends ServiceEntityRepository implements BaseRepositoryInterface
{
}
