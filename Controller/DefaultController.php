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

/**
 * Handle Data based date chart.
 *
 * Class DefaultController
 * @package Goulmima\BlogBundle\Controller
 */
class DefaultController extends AbstractController
{
    /**
     * Render data based date chart.
     *
     * @param AggregatorInterface $aggregator
     *
     * @Route("/", name="goulmima_blog_index")
     */
    public function index(AggregatorInterface $aggregator)
    {
        return $this->render('@GoulmimaBlog/default/index.html.twig', [
            'result' => $aggregator->getCountItemsByDate()
        ]);
    }
}
