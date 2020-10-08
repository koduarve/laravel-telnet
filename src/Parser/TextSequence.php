<?php

namespace Telnet\Parser;

use Telnet\Parser\Sequence;

class TextSequence extends Sequence
{
    //Always complete
    public function __construct($string, $complete = true)
    {
        parent::__construct($string, true);
    }
}
