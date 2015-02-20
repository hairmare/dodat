<?php

namespace Hairmare\Dodat;

use Symfony\Component\Yaml\Yaml;

class Load
{
    /**
     * @var array
     */
    private $data;

    /**
     * @param string $json
     */
    public function __construct($json)
    {
        $this->data = Yaml::parse($json);
    }

    /**
     * @return string[]
     */
    public function getScripts()
    {
        return $this->data['script'];
    }
}
