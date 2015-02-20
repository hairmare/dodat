<?php

namespace Hairmare\Dodat;

use Symfony\Component\Process\Process;

class Run
{
    /**
     * @var string[]
     */
    private $scripts = array();

    /**
     * @param string[] $scripts
     */
    public function setScripts($scripts)
    {
        $this->scripts = $scripts;
    }

    public function run()
    {
        foreach ($this->scripts as $script) {
            $process = new Process($script);
            $process->run(function ($type, $buffer) {
                echo $buffer;
            });
        }
    }
}
