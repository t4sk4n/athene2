<?php
/**
 * Athene2 - Advanced Learning Resources Manager
 *
 * @author    Aeneas Rekkas (aeneas.rekkas@serlo.org)
 * @license   http://www.apache.org/licenses/LICENSE-2.0  Apache License 2.0
 * @link      https://github.com/serlo-org/athene2 for the canonical source repository
 * @copyright Copyright (c) 2013-2014 Gesellschaft für freie Bildung e.V. (http://www.open-education.eu/)
 */
namespace Navigation\View\Helper;

use Zend\Cache\Storage\StorageInterface;
use Zend\Navigation\AbstractContainer;
use Zend\ServiceManager\ServiceLocatorAwareInterface;
use Zend\View\Helper\Navigation\AbstractHelper;

class Navigation extends \Zend\View\Helper\Navigation
{
    protected $storage;

    public function __construct(StorageInterface $storage)
    {
        $this->storage = $storage;
    }

    public function render($container = null)
    {
        $container = $container ? $container : $this->getContainer();
        $output    = parent::render($container);
        return $output;
    }


    public function __call($method, array $arguments = array())
    {
        return parent::__call($method, $arguments); // TODO: Change the autogenerated stub
    }
}
