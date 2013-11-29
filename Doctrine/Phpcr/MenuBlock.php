<?php
/*
 * 
 * This file is part of the Symfony CMF package.
 *
 * (c) 2011-2013 Symfony CMF
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Cmf\Bundle\BlockBundle\Doctrine\Phpcr;

use Symfony\Cmf\Bundle\BlockBundle\Doctrine\Phpcr\AbstractBlock;
use Symfony\Cmf\Bundle\MenuBundle\Model\MenuNodeBase as MenuInterface;
use Sonata\BlockBundle\Model\BlockInterface;

/**
 * Block that is a reference to a menu.
 */
class MenuBlock extends AbstractBlock
{
    /**
     * @var BlockInterface
     */
    private $referencedMenu;

    /**
     * {@inheritdoc}
     */
    public function getType()
    {
        return 'cmf.block.menu';
    }

    /**
     * @return BlockInterface|null
     */
    public function getReferencedMenu()
    {
        return $this->referencedMenu;
    }

    /**
     * @param BlockInterface $referencedMenu
     *
     * @return MenuBlock $this
     */
    public function setReferencedMenu(MenuInterface $referencedMenu)
    {
        $this->referencedMenu = $referencedMenu;

        return $this;
    }
}
