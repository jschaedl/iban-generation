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
class Rule002900 extends Rule000000
{
    public function generateIban()
    {
        if (substr($this->bankAccountNumber, 3, 1) == '0') {
            $this->bankAccountNumber = substr($this->bankAccountNumber, 0, 3)
                . substr($this->bankAccountNumber, 4);
        }

        return parent::generateIban();
    }
}
