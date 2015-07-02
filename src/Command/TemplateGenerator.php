<?php

use Illuminate\Console\Command;

class TemplateGeneratorCommand extends Command {


    protected $name = 'template:generate';

    protected $description = 'Generate New Template';


    public function fire()
    {
        $this->line('Generator fucking life');
    }
}