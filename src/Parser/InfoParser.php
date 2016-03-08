<?php

/**
 * @file
 */

namespace DruposerHelper\Parser;

class InfoParser
{
    protected $data;

    public function __construct($filename)
    {
        if (!is_readable($filename)) {
            throw new \Exception(sprintf("Could not find file %s", $filename));
        }

        $this->data = parse_ini_file($filename);
    }

    public function has($key)
    {
        return isset($this->data[$key]);
    }

    public function get($key)
    {
        if (!$this->has($key)) {
            throw new \Exception(sprintf("Could not find key %s", $key));
        }

        return $this->data[$key];
    }
}
