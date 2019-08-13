<?php

/*
 * This file is part of the MidoBlogBundle package.
 *
 * (c) Majid Noureddine <noureddine.digitalworks@gmail.com>
 *
 */

namespace Mido\BlogBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * The BlogBundle uses -by default- this aliases :
 * - @MidoBlog to call templates from controllers,
 * - mido_blog to configure core bundle behaviors.
 */
class MidoBlogBundle extends Bundle
{
}
