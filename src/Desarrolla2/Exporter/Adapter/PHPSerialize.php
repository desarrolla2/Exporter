<?php

/**
 * This file is part of the Exporter proyect.
 * 
 * Description of PHPSerialize
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es> 
 * @file : PHPSerialize.php , UTF-8
 * @date : Sep 8, 2012 , 4:04:01 PM
 */

namespace Desarrolla2\Exporter\Adapter;

use Desarrolla2\Exporter\Adapter\AdapterInterface;
use Desarrolla2\Exporter\Exception;

class PHPSerialize implements AdapterInterface
{
    public function __construct()
    {
        throw new \Exception('Not Ready yet');
    }
    /**
     * {@inheritdoc } 
     */
    public function export()
    {
        
    }
    /**
     * {@inheritdoc } 
     */
    public function setData(array $data = array())
    {
        
    }
    /**
     * {@inheritdoc } 
     */
    public function setOption($key, $value)
    {
        
    }
    
    

}