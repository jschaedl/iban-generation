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
class Rule003400 extends Rule000000
{
    protected function getBankAccountSubstitutions()
    {
        return array(
            "500500500" => "4340111112",
            "502" => "4340118001"
        );
    }

    public function generateIban()
    {
        if (intval($this->bankAccountNumber) >= 800000000 &&
            intval($this->bankAccountNumber) <= 899999999) {
            return "";
        }

        return parent::generateIban ();
    }
}
