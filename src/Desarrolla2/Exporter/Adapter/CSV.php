<?php

/**
 * This file is part of the Exporter proyect.
 * 
 * Description of CSV
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es> 
 * @file : CSV.php , UTF-8
 * @date : Sep 6, 2012 , 12:29:12 AM
 */

namespace Desarrolla2\Exporter\Adapter;

use Desarrolla2\Exporter\Adapter\AdapterInterface;
use Desarrolla2\Exporter\Exception;

class CSV implements AdapterInterface
{

    /**
     * @var array
     */
    protected $data = array();

    /**
     * @var array
     */
    protected $options = array();

    /**
     * @var resource
     */
    protected $fh = null;

    /**
     * Constructor
     */
    public function __construct()
    {
        $this->options = array(
            'separator'    => ';',
            'with-headers' => true,
        );
    }

    /**
     * {@inheritdoc } 
     */
    public function export()
    {
        if (!count($this->data)) {
            throw new Exception\DataNotValidException();
        }
        $this->fh = fopen($this->options['filename'], "w");        
        if (!$this->fh) {
            throw new Exception\FileOpenException();
        }
        if ($this->options['with-headers']){
            fwrite($this->fh, strtoupper( implode($this->options['separator'], array_keys($this->data[0]))));
        }
        foreach ($this->data as $item) {
            fwrite($this->fh, implode($this->options['separator'], array_values($item)));
        }
        fclose($this->fh);
    }

    /**
     * {@inheritdoc } 
     */
    public function setData(array $data = array())
    {
        $this->data = array();
    }

    /**
     * {@inheritdoc } 
     */
    public function setOption($key, $value)
    {
        $this->options[$key] = $value;
    }

}
