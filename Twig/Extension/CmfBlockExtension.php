<?php

namespace Symfony\Cmf\Bundle\BlockBundle\Twig\Extension;

use Symfony\Cmf\Bundle\BlockBundle\Templating\Helper\CmfBlockHelper;

/**
 * Utility function for blocks
 *
 * @author David Buchmann <david@liip.ch>
 */
class CmfBlockExtension extends \Twig_Extension
{
    protected $blockHelper;

    public function __construct(CmfBlockHelper $blockHelper)
    {
        $this->blockHelper = $blockHelper;
    }

    public function getFilters()
    {
        return array(
            new \Twig_SimpleFunction('cmf_embed_blocks',
                array($this->blockHelper, 'cmfEmbedBlocks'),
                array('is_safe' => array('html'))
            ),
        );
    }

    public function getName()
    {
        return 'cmf_block';
    }
}
