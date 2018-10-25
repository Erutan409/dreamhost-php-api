<?php

namespace Erutan409\Dreamhost\CLI\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Input\InputArgument;

class APIKey extends Command
{
    public function configure()
    {
        $this->setName('get-key')
            ->setDescription('Gets the current API key set for this instance.');
    }

    public function execute(InputInterface $input, OutputInterface $output) {
        $output->writeln('No API key set for instance.');
    }
}