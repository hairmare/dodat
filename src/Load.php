<?php

namespace Hairmare\Dodat;

use Symfony\Component\Yaml\Yaml;

class Load
{
    /**
     * @var array
     */
    private $data;

    public static function fromFile($file = null)
    {
        if (is_null($file)) {
            $file = __DIR__.'/../.travis.yml';
        }
        return new Load(file_get_contents($file));
    }

    /**
     * @param string $json
     */
    public function __construct($json)
    {
        $data = Yaml::parse($json);
        if (!is_array($data)) {
            throw new \RuntimeException('Found non array data in .travis.yml');
        }
        $this->data = $data;
    }

    /**
     * @return string[]
     */
    public function getScripts()
    {
        return $this->data['script'];
    }
}
