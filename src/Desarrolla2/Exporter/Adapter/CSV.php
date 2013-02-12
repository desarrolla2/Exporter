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

class CSV implements AdapterInterface {

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
    public function __construct() {
        $this->options = array(
            'data' => array(),
            'separator' => ';',
            'with-headers' => true,
        );
    }

    /**
     * {@inheritdoc }
     */
    public function fetch() {
        $data = '';
        if (!count($this->data)) {
            throw new Exception\DataNotValidException();
        }
        if ($this->options['with-headers']) {
            $data .= implode($this->options['separator'], array_keys($this->data[0])) . PHP_EOL;
        }
        foreach ($this->data as $item) {
            $data .= implode($this->options['separator'], array_values($item)) . PHP_EOL;
        }
        return $data;
    }

    /**
     * {@inheritdoc }
     */
    public function setData(array $array = array()) {
        $this->data = $array;
    }

    /**
     * {@inheritdoc }
     */
    public function setOption($key, $value) {
        if ($key == 'data') {
            $this->data = $value;
        } else {
            $this->options[$key] = $value;
        }
    }

    /**
     * {@inheritdoc }
     */
    public function write() {
        $this->fh = fopen($this->options['filename'], "w");
        if (!$this->fh) {
            throw new Exception\FileOpenException();
        }
        fwrite($this->fh, $this->fetch());
        fclose($this->fh);
    }

}
