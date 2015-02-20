<?php

namespace Hairmare\Dodat;

use Symfony\Component\Console\Command\Command as SymfonyCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Hairmare\Dodat\Run;
use Hairmare\Dodat\Load;

class Command extends SymfonyCommand
{
    /**
     * @var Run
     */
        private $run;

    /**
     * @var Load
     */
    private $load;

    public function __construct(Run $run, Load $load)
    {
        $this->load = $load;
        $this->run = $run;
        parent::__construct();
    }

    protected function configure()
    {
        $this
            ->setName('run')
            ->setDescription('Run scripts from .travis.yml');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->run->setScripts($this->load->getScripts());
        $this->run->run();
    }
}
