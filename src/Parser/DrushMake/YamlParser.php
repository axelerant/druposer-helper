<?php

/**
 * @file
 */

namespace DruposerHelper\Parser\DrushMake;

use Symfony\Component\Yaml\Yaml;

class YamlParser implements ParserInterface
{
    protected $data;

    public function __construct($filename)
    {
        $this->data = Yaml::parse(file_get_contents($filename), true);
    }

    public function getCore()
    {
        return $this->data['core'];
    }

    public function getApi()
    {
        return $this->data['api'];
    }

    public function getProjects()
    {
        return $this->data['projects'];
    }

    public function getLibraries()
    {
        return $this->data['libraries'];
    }

    public function getPatches()
    {
        $patches = [];
        foreach ($this->getProjects() as $name => $project) {
            if (!empty($project['patch'])) {
                $patches[$name] = $project['patch'];
            }
        }

        return $patches;
    }
}
