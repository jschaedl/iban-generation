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
class Rule000200 extends Rule000000
{
    public function generateIban(): string
    {
        if (preg_match('/' . '[0-9]{7}[8]{1}[6]{1}[0-9]{1}' . '/', $this->bankAccountNumber) === 1 ||
            preg_match('/' . '[0-9]{7}[6]{1}[0-9]{2}' . '/', $this->bankAccountNumber) === 1
        ) {
            return '';
        } else {
            return parent::generateIban();
        }
    }
}
