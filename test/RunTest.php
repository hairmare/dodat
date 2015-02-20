<?php

namespace Hairmare\Dodat;

class RunTest extends \PHPUnit_Framework_TestCase
{
    public function testRun()
    {
        $sut = new Run;
        $sut->setScripts(array('printf "Hello "', 'echo "World!"'));
        $sut->run();

        $this->expectOutputString("Hello World!\n");
    }
}
