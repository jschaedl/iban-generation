<?php

/*
 * This file is part of the iban-generation library.
 *
 * (c) Jan Schädlich <mail@janschaedlich.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Iban\Generation\Rule\DE;

/**
 * @author Jan Schädlich <mail@janschaedlich.de>
 */
class Rule004100 extends Rule000000
{
    public function generateIban()
    {
        if ($this->instituteIdentificationEquals('62220000')) {
            return "DE96500604000000011404";
        }

        return parent::generateIban ();
    }
}
