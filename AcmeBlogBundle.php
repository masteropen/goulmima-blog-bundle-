<?php

/*
 * This file is part of the AcmeBlogBundle package.
 *
 * (c) Majid Noureddine <noureddine.digitalworks@gmail.com>
 *
 */

namespace Acme\BlogBundle;

use Symfony\Component\HttpKernel\Bundle\Bundle;

/**
 * The BlogBundle uses -by default- this aliases :
 * - @AcmeBlog to call templates from controllers,
 * - acme_blog to configure core bundle behaviors.
 */
class AcmeBlogBundle extends Bundle
{
}
