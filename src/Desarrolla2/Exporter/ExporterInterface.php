<?php

/**
 * This file is part of the Exporter proyect.
 *
 * Description of ExporterInterface
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es>
 * @file : ExporterInterface.php , UTF-8
 * @date : Sep 6, 2012 , 12:28:14 AM
 */

namespace Desarrolla2\Exporter;

use Desarrolla2\Exporter\Adapter\AdapterInterface;

interface ExporterInterface
{

    /**
     * Export data
     */
    public function export();

    /**
     * Set adapter
     *
     * @param \Desarrolla2\Exporter\Adapter\AdapterInterface $adapter
     */
    public function setAdapter(AdapterInterface $adapter);

    /**
     * @param array $data
     */
    public function setData(array $data = array());

    /**
     * @param string $file
     */
    public function setFile($file);

    /**
     * @param string $key
     * @param string $value
     */
    public function setOption($key, $value);

    /**
     * @param array $options
     */
    public function setOptions(array $options = array());
}
