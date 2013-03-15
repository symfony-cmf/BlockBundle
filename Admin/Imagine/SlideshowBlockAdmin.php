<?php

namespace Symfony\Cmf\Bundle\BlockBundle\Admin\Imagine;

use Sonata\AdminBundle\Form\FormMapper;

class SlideshowBlockAdmin extends MinimalSlideshowBlockAdmin
{
    protected $baseRouteName = 'symfony_cmf_block.imagine.slideshow_admin';
    protected $baseRoutePattern = 'symfony_cmf/block/imagineSlideshow';
    protected $translationDomain = 'SymfonyCmfBlockBundle';

    /**
     * Path to where new slideshow blocks may be attached
     *
     * @var string
     */
    protected $blockRoot;

    public function setBlockRoot($blockRoot)
    {
        $this->blockRoot = $blockRoot;
    }

    protected function configureFormFields(FormMapper $formMapper)
    {
        parent::configureFormFields($formMapper);
        $formMapper
            ->with('form.group_general')
                ->add('parentDocument', 'doctrine_phpcr_odm_tree', array('root_node' => $this->blockRoot, 'choice_list' => array(), 'select_root_node' => true))
                ->add('name', 'text')
            ->end();
    }
}
