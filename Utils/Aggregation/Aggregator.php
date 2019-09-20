<?php

/*
 * This file is part of the GoulmimaBlogBundle package.
 *
 * (c) Majid Noureddine <noureddine.digitalworks@gmail.com>
 *
 */

namespace Goulmima\BlogBundle\Utils\Aggregation;

use Doctrine\ORM\EntityManager;

class Aggregator implements AggregatorInterface
{
    /**
     * @var EntityManager
     */
    private $entityManager;

    /**
     * @var string $entityName
     */
    private $entityName;

    /**
     * @param EntityManager $entityManager
     * @param string $entityName
     */
    public function __construct(EntityManager $entityManager, string $entityName)
    {
        $this->entityManager = $entityManager;
        $this->entityName = $entityName;
    }

    /**
     * @inheritDoc
     */
    public function getSum()
    {
        $result = $this->entityManager->getRepository($this->entityName)->findAll();

        return is_array($result) ? count($result) : 0;
    }

    public function getEntityName()
    {
        return $this->entityName;
    }
}
