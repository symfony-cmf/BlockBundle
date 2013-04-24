<?php

namespace Symfony\Cmf\Bundle\BlockBundle\Block;

use Symfony\Component\HttpFoundation\Response;
use Sonata\BlockBundle\Block\BlockServiceInterface;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\BlockBundle\Model\BlockInterface;
use Sonata\AdminBundle\Validator\ErrorElement;
use Sonata\BlockBundle\Block\BaseBlockService;

class StringBlockService extends BaseBlockService implements BlockServiceInterface
{
    protected $template = 'SymfonyCmfBlockBundle:Block:block_string.html.twig';

    public function __construct($name, $templating, $template = null)
    {
        parent::__construct($name, $templating);

        if ($template) {
            $this->template = $template;
        }
    }

    /**
     * {@inheritdoc}
     */
    public function buildEditForm(FormMapper $form, BlockInterface $block)
    {
        throw new \RuntimeException('Not used at the moment, editing using a frontend or backend UI could be changed here');
    }

    /**
     * {@inheritdoc}
     */
    public function validateBlock(ErrorElement $errorElement, BlockInterface $block)
    {
        throw new \RuntimeException('Not used at the moment, validation for editing using a frontend or backend UI could be changed here');
    }

    /**
     * @param BlockInterface $block
     * @param null|Response  $response
     *
     * @return \Symfony\Component\HttpFoundation\Response
     */
    public function execute(BlockInterface $block, Response $response = null)
    {
        if (!$response) {
            $response = new Response();
        }

        if ($block->getEnabled()) {
            $response = $this->renderResponse($this->template, array('block' => $block), $response);
        }

        return $response;
    }
}

