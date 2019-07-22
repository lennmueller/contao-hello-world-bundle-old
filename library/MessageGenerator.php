<?php

declare(strict_types=1);

namespace lennmueller\ContaoHelloWorldBundle\Library;

class MessageGenerator
{
    public function sayHelloTo(string $target): string
    {
        $message = 'Hello '.$target;

        return $message;
    }

}
