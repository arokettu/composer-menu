<?php

declare(strict_types=1);

namespace Arokettu\ComposerMenu;

use Arokettu\ConsoleMenu\ConsoleMenuCommand;
use Composer\Command\BaseCommand;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;

class ComposerMenuCommand extends BaseCommand
{
    private $menu;

    public function __construct(string $name = null)
    {
        parent::__construct($name);
        $this->menu = new ConsoleMenuCommand();
    }

    protected function initialize(InputInterface $input, OutputInterface $output)
    {
        $this->setName('menu');
        $this->setDescription('Commands menu');
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $this->menu->setApplication($this->getApplication());
        return $this->menu->execute($input, $output);
    }
}
