<?php

declare(strict_types=1);

/*
 * This file is part of [package name].
 *
 * (c) John Doe
 *
 * @license LGPL-3.0-or-later
 */

namespace GrundigAkademie\HelloWorldBundle\Tests;

use Contao\SkeletonBundle\ContaoSkeletonBundle;
use PHPUnit\Framework\TestCase;

class ContaoHelloWorldBundleTest extends TestCase
{
    public function testCanBeInstantiated(): void
    {
        $bundle = new ContaoSkeletonBundle();

        $this->assertInstanceOf('GrundigAkademie\HelloWorldBundle\HelloWorldBundle', $bundle);
    }
}
