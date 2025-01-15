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

namespace Sonata\PageBundle\Model;

/**
 * @author Kirill Hainovsky <kirill.hainovsky@intexsys.lv>
 */
interface TransformerExtensionInterface
{
    public function configureSnapshot(SnapshotInterface $snapshot, PageInterface $page): void;

    public function configurePage(PageInterface $page, SnapshotInterface $snapshot): void;

    public function extendContent(array &$content, PageInterface $page): void;

    public function configureBlock(PageBlockInterface $block, array $content, PageInterface $page): void;

    public function loadContent(PageInterface $page, array $content): void;

    public function shouldLoadChildBlock(array $childContent): bool;
}
