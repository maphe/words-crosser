<?php

namespace Cross\GameBundle\Grid;

use Symfony\Component\OptionsResolver\OptionsResolver;

use Cross\GameBundle\Entity\Grid;

use Cross\GameBundle\Grid\Box\BoxFactory;

class GridManager
{
    /**
     *
     * @var BoxFactory
     */
    protected $boxFactory;

    /**
     *
     * @var Grid
     */
    protected $grid;

    /**
     *
     * @var array
     */
    protected $config;

    public function __construct(BoxFactory $boxFactory)
    {
        $this->boxFactory = $boxFactory;
    }

    public function generate(array $config = null)
    {
        if (null !== $config) {
            $this->config = $config;
        }

        $this->initGrid();


    }

    protected function initGrid()
    {
        $optionsResolver = new OptionsResolver();
        $optionsResolver->setRequired(array('width', 'height'))
                        ->setAllowedTypes(array('width' => array('int'), 'height' => array('int')));

        $optionsResolver->resolve($this->config);

        $this->grid = new Grid();

        $this->grid->setWidth($config['width']);
        $this->grid->setHeight($config['height']);


    }
}

