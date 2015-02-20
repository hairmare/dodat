<?php

namespace Hairmare\Dodat;

use Symfony\Component\Console\Tester\CommandTester;
use Hairmare\Dodat\Load;

class CommandTest extends \PHPUnit_Framework_TestCase
{
    public function testCommand()
    {
        $runMock = $this->getMock('\Hairmare\Dodat\Run');
        $runMock->expects($this->once())->method('setScripts');
        $runMock->expects($this->once())->method('run');

        $load = new Load(file_get_contents(__DIR__.'/../.travis.yml'));

        $command = new Command($runMock, $load);
        $tester = new CommandTester($command);

        $tester->execute(array());
    }
}
