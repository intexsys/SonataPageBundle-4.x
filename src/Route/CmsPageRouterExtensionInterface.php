<?php

declare(strict_types=1);

/*
 * This file is part of the Sonata Project package.
 *
 * (c) Thomas Rabaix <thomas.rabaix@sonata-project.org>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Sonata\PageBundle\Route;

use Sonata\PageBundle\Model\PageInterface;

/**
 * @author Kirill Hainovsky <kirill.hainovsky@intexsys.lv>
 */
interface CmsPageRouterExtensionInterface
{
    public function alterMatchResult(array &$result, PageInterface $page, string $pathInfo): void;

    public function alterGenerateParameters(array $parameters, PageInterface $page): array;

    public function alterSlugParameters(array $parameters): array;
}
