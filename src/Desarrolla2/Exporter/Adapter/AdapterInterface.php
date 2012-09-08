<?php

/**
 * This file is part of the Exporter proyect.
 *
 * Description of AdapterInterface
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es>
 * @file : AdapterInterface.php , UTF-8
 * @date : Sep 6, 2012 , 12:29:07 AM
 */

namespace Desarrolla2\Exporter\Adapter;

interface AdapterInterface
{

    /**
     * @param string $key
     * @param string $value
     */
    public function setOption($key, $value);

    /**
     * Export data
     */
    public function export();
}
