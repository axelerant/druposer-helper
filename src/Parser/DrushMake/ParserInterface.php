<?php

/**
 * @file
 */

namespace DruposerHelper\Parser\DrushMake;

interface ParserInterface
{
    public function getCore();

    public function getApi();

    public function getProjects();

    public function getLibraries();

    public function getPatches();
}
