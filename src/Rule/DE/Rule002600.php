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
class Rule002600 extends Rule000000
{
    public function generateIban()
    {
        if ($this->bankAccountNumberEquals('55111') ||
            $this->bankAccountNumberEquals('8090100')) {
            // TODO skip bankAccountNumber validation (is not implemented yet)
        }

        return parent::generateIban();
    }
}
