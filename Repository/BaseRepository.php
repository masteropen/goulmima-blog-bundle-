<?php

namespace Goulmima\BlogBundle\Repository;

use App\Entity\BlogPost;
use Doctrine\Common\Persistence\ManagerRegistry;
use Doctrine\Bundle\DoctrineBundle\Repository\ServiceEntityRepository;

abstract class BaseRepository extends ServiceEntityRepository implements BaseRepositoryInterface
{
}
