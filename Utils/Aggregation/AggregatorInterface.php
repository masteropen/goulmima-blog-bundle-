<?php

/*
 * This file is part of the GoulmimaBlogBundle package.
 *
 * (c) Majid Noureddine <noureddine.digitalworks@gmail.com>
 *
 */

namespace Goulmima\BlogBundle\Utils\Aggregation;

interface AggregatorInterface
{
    /**
     * Retrieve all registered posts.
     *
     * @param string $entity. Examples : Post::class , 'App\Entity\Post'
     * @return object[]
     */
    public function getSum($entity);
}
