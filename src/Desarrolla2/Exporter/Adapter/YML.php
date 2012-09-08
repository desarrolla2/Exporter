<?php

/**
 * This file is part of the Exporter proyect.
 *
 * Description of YML
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es>
 * @file : YML.php , UTF-8
 * @date : Sep 8, 2012 , 4:03:40 PM
 */

namespace Desarrolla2\Exporter\Adapter;

use Desarrolla2\Exporter\Adapter\AdapterInterface;
use Desarrolla2\Exporter\Exception;

class YML implements AdapterInterface
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
