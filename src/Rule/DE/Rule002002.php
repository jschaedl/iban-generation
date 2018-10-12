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
class Rule002002 extends Rule000000
{
    public function __construct($localeCode, $instituteIdentification, $bankAccountNumber)
    {
        $bankAccountReplacement = array (
            "50070010#9999" => "92777202"
        );

        if (isset($bankAccountReplacement[$instituteIdentification . "#" . $bankAccountNumber])) {
            $bankAccountNumber = $bankAccountReplacement[$instituteIdentification . "#" . $bankAccountNumber];
        }

        // Accounts from "Deutsche Bank" have to be at least 7 digits in length.
        // Leading zero's are possible
        if (strlen($bankAccountNumber) < 7) {
            $bankAccountNumber = str_pad($bankAccountNumber, 7, '0', STR_PAD_LEFT);
        }

        if (substr($instituteIdentification, 3, 1) == '7') {
            // For correct IBAN generation the sub account from "Deutsche Bank" has to be included
            if (strlen($bankAccountNumber) == 7) {
                $bankAccountNumber = str_pad($bankAccountNumber, 9, '0', STR_PAD_RIGHT);
            }
        }

        parent::__construct($localeCode, $instituteIdentification, $bankAccountNumber);
    }
}
