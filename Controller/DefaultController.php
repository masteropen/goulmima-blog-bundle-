<?php

/*
 * This file is part of the GoulmimaBlogBundle package.
 *
 * (c) Majid Noureddine <noureddine.digitalworks@gmail.com>
 *
 */

namespace Goulmima\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Routing\Annotation\Route;
use Goulmima\BlogBundle\Utils\Aggregation\AggregatorInterface;

class DefaultController extends AbstractController
{
    /**
     * @Route("/", name="goulmima_blog_index")
     */
    public function index(AggregatorInterface $aggregator)
    {
        $result = $aggregator->getSum();
        $entityName = $aggregator->getEntityName();
        return $this->render('@GoulmimaBlog/default/index.html.twig', [
            'result' => $result,
            'entityName' => $entityName
        ]);
    }
}
