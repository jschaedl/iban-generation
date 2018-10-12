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
class Rule000900 extends Rule000000
{
    public function generateIban()
    {
        if (strlen($this->bankAccountNumber) == 10 && $this->instituteIdentification == '68351976') {
            if (substr($this->bankAccountNumber, 0, 4) == '1116') {
                $this->bankAccountNumber = '3047' . substr($this->bankAccountNumber, 4);
            }
        }

        $this->instituteIdentification = '68351557';

        return parent::generateIban();
    }
}
