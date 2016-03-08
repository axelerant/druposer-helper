<?php

/**
 * @file
 */

namespace DruposerHelper\Parser\DrushMake;

class Parser
{

    public function getParser($filename)
    {
        if (!is_readable($filename)) {
            throw new \Exception(sprintf("Could not find file %s", $filename));
        }

        $parser = null;
        try {
            $parser = new YamlParser($filename);
        }
        catch (\Exception $ex) { }

        return $parser;
    }
}
