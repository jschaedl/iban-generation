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
class Rule004200 extends Rule000000
{
    public function generateIban()
    {
        $floatbankAccountNumber = floatval($this->bankAccountNumber);

        if (($floatbankAccountNumber >= 50462000 && $floatbankAccountNumber <= 50463999) ||
            ($floatbankAccountNumber >= 50469000 && $floatbankAccountNumber <= 50469999)) {
            return parent::generateIban ();
        }

        if (strlen($this->bankAccountNumber) != 8 || substr($this->bankAccountNumber, 3, 1) != "0") {
            return "";
        }

        $lastFive = floatval(substr($this->bankAccountNumber, - 5));
        if ($lastFive >= 0 && $lastFive <= 999) {
            return "";
        }

        return parent::generateIban ();
    }
}
