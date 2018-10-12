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
class Rule003300 extends Rule000000
{
    protected function getBankAccountSubstitutions()
    {
        return array(
            "22222" => "5803435253",
            "1111111" => "39908140",
            "94" => "2711931",
            "7777777" => "5800522694",
            "55555" => "5801800000"
        );
    }

    public function __construct($localeCode, $instituteIdentification, $bankAccountNumber)
    {
        if (intval($bankAccountNumber) >= 800000000 && intval($bankAccountNumber) <= 899999999) {
            $instituteIdentification = "70020270";
        }

        parent::__construct($localeCode, $instituteIdentification, $bankAccountNumber);
    }
}
