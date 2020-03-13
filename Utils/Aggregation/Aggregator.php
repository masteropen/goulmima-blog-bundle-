<?php

/*
 * This file is part of the GoulmimaBlogBundle package.
 *
 * (c) Majid Noureddine <noureddine.digitalworks@gmail.com>
 *
 */

namespace Goulmima\BlogBundle\Utils\Aggregation;

use Doctrine\ORM\EntityManager;

/**
 * Aggregation service.
 * 
 * Class Aggregator
 * @package Goulmima\BlogBundle\Utils\Aggregation
 */
class Aggregator implements AggregatorInterface
{
    /** @var EntityManager $entityManager */
    private $entityManager;

    /** @var string $entityName */
    private $entityName;

    /** @var array $stats */
    private $stats;

    /**
     * @param EntityManager $entityManager
     * @param string        $entityName
     * @param array         $stats
     */
    public function __construct(EntityManager $entityManager, string $entityName, array $stats)
    {
        $this->entityManager = $entityManager;
        $this->entityName = $entityName;
        $this->stats = $stats;
    }

    /** @inheritDoc */
    public function getSum()
    {
        $result = $this->entityManager->getRepository($this->entityName)->findAll();

        return is_array($result) ? count($result) : 0;
    }

    /** @inheritDoc */
    public function getEntityName()
    {
        return $this->entityName;
    }

    /** @inheritDoc */
    public function getCountItemsByDate()
    {
        return $this->entityManager->getRepository($this->entityName)->countItemsByDate();
    }
}
