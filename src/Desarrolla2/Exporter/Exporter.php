<?php

/**
 * This file is part of the Exporter proyect.
 *
 * Description of Exporter
 *
 * @author : Daniel González <daniel.gonzalez@freelancemadrid.es>
 * @file : Exporter.php , UTF-8
 * @date : Sep 6, 2012 , 12:28:03 AM
 */

namespace Desarrolla2\Exporter;

use Desarrolla2\Exporter\ExporterInterface;
use Desarrolla2\Exporter\Exception;

class Exporter implements ExporterInterface
{

    /**
     * @var \Desarrolla2\Exporter\ExporterInterface;
     */
    protected $adapter = null;

    /**
     * @var array
     */
    protected $options = array();

    /**
     * @var array
     */
    protected $errors = array();

    /**
     * @var array
     */
    protected $validOptions = array(
        'with-headers', 'data',
        'filename', 'separator'
    );

    /**
     * @var array
     */
    protected $requiredOptions = array(
        'data', 'filename',
    );

    /**
     * {@inheritdoc }
     */
    public function __construct(Adapter\AdapterInterface $adapter)
    {
        $this->setAdapter($adapter);
    }

    /**
     * {@inheritdoc }
     */
    public function fetch()
    {
        return $this->getAdapter()->fetch();
    }

    /**
     * Get the adapter
     *
     * @return type
     * @throws Exception\AdapterNotSetException
     */
    protected function getAdapter()
    {
        if ($this->adapter) {
            return $this->adapter;
        } else {
            throw new Exception\AdapterNotSetException();
        }
    }

    /**
     * {@inheritdoc }
     */
    public function setAdapter(Adapter\AdapterInterface $adapter)
    {
        $this->adapter = $adapter;
    }

    /**
     * {@inheritdoc }
     */
    public function setData(array $array = array())
    {
        $this->setOption('data', $array);
    }

    /**
     * {@inheritdoc }
     */
    public function setFile($file)
    {
        $this->setOption('filename', $file);
    }

    /**
     *
     * @param  string $option
     * @return string
     */
    protected function sanitizeOption($option)
    {
        return trim(strtolower((string) $option));
    }

    /**
     * {@inheritdoc }
     */
    public function setOption($key, $value)
    {
        $key = $this->sanitizeOption($key);
        if (!in_array($key, $this->validOptions)) {
            throw new Exception\OptionNotValidException('Option not valid ' . $key);
        }
        $this->options[$key] = $value;
        $this->getAdapter()->setOption($key, $value);
    }

    /**
     * {@inheritdoc }
     */
    public function setOptions(array $options = array())
    {
        foreach ($options as $key => $value) {
            $this->setOption($key, $value);
        }
    }
    
     /**
     * {@inheritdoc }
     */
    public function write()
    {
        return $this->getAdapter()->write();
    }

}
