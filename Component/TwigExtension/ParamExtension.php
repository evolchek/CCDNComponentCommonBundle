<?php

/*
 * This file is part of the CCDNComponent CommonBundle
 *
 * (c) CCDN (c) CodeConsortium <http://www.codeconsortium.com/>
 *
 * Available on github <http://www.github.com/codeconsortium/>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace CCDNComponent\CommonBundle\Component\TwigExtension;

/**
 *
 * @author Reece Fowell <reece@codeconsortium.com>
 * @version 1.0
 */
class ParamExtension extends \Twig_Extension
{

    /**
     *
     * @access protected
     */
    protected $container;

    /**
     *
 	 * @access public
 	 * @param $container
     */
    public function __construct($container)
    {
        $this->container = $container;
    }

    /**
     *
     * @access public
     * @return array
     */
    public function getFunctions()
    {
        return array(
            'param' => new \Twig_Function_Method($this, 'param'),
        );
    }

    /**
     * returns the requested param.
     *
     * @access public
     * @param $param
     * @return string
     */
    public function param($param)
    {
        return $this->container->getParameter($param);
    }

    /**
     *
     * @access public
     * @return string
     */
    public function getName()
    {
        return 'param';
    }

}
