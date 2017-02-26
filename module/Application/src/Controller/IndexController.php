<?php
/**
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2016 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

namespace Application\Controller;

use Zend\Log\Logger;
use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;

class IndexController extends AbstractActionController
{
    /**
     * var Logger $logger
     */
    //protected $logger;


    public function __construct(Logger $logger) 
    {
        //$this->logger = $logger;
    }

    public function indexAction()
    {
        //$this->logger->log('Example Log Message');
        return new ViewModel();
    }
}
