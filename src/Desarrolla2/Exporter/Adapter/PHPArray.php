<?php

/**
 * This file is part of the Exporter proyect.
 * 
 * Description of PHPArray
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es> 
 * @file : PHPArray.php , UTF-8
 * @date : Sep 8, 2012 , 4:03:54 PM
 */


namespace Desarrolla2\Exporter\Adapter;

use Desarrolla2\Exporter\Adapter\AdapterInterface;
use Desarrolla2\Exporter\Exception;

class PHPArray implements AdapterInterface
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