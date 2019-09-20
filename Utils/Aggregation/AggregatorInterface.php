<?php

/*
 * This file is part of the GoulmimaBlogBundle package.
 *
 * (c) Majid Noureddine <noureddine.digitalworks@gmail.com>
 *
 */

namespace Goulmima\BlogBundle\Utils\Aggregation;

/**
 * All Aggregator services should implements this interface.
 */
interface AggregatorInterface
{
    /**
     * Retrieve all registered posts.
     *
     * @return int
     */
    public function getSum();

    public function getEntityName();
}
