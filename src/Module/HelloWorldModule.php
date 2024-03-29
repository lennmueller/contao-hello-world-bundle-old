<?php

namespace lennmueller\ContaoHelloWorldBundle\Module;

class HelloWorldModule extends \Haste\Frontend\AbstractFrontendModule
{
    /**
     * @var string
     */
    protected $strTemplate = 'mod_helloWorld';

    /**
     * Generates the module.
     */
    protected function compile()
    {
        $messageGenerator = \Contao\System::getContainer()->get('lennmueller.contao_hello_world_bundle.message_generator');

        $message = $messageGenerator->sayHelloTo('World');

        $this->Template->message = $message;
    }
}