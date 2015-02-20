<?php

namespace Hairmare\Dodat;

class LoadTest extends \PHPUnit_Framework_TestCase
{
    public function testLoading()
    {
        $sut = new Load(file_get_contents(__DIR__.'/../.travis.yml'));

        $scripts = $sut->getScripts();
        $this->assertEquals('./vendor/bin/phpunit --coverage-text --coverage-clover=coverage.clover', $scripts[0]);
        $this->assertEquals('php ocular.phar code-coverage:upload --format=php-clover coverage.clover', $scripts[1]);
        $this->assertEquals('./vendor/bin/phpcs --standard=PSR1 bin/ src/ test/', $scripts[2]);
        $this->assertEquals('./vendor/bin/phpcs --standard=PSR2 bin/ src/ test/', $scripts[3]);
    }
}
