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
class Rule003600 extends Rule000000
{
    protected function getInstituteIdentificationSubstitutions()
    {
        return array(
            "20050000" => "21050000",
            "23050000" => "21050000"
        );
    }

    public function __construct($localeCode, $instituteIdentification, $bankAccountNumber)
    {
        if (strlen($bankAccountNumber) == 6) {
            $bankAccountNumber = str_pad($bankAccountNumber, 9, '0', STR_PAD_RIGHT);
        }

        parent::__construct($localeCode, $instituteIdentification, $bankAccountNumber);
    }

    public function generateIban()
    {
        $floatBankAccountNumber = floatval($this->bankAccountNumber);
        if ($floatBankAccountNumber < 99999 ||
            ($floatBankAccountNumber >= 900000 && $floatBankAccountNumber <= 29999999) ||
            ($floatBankAccountNumber >= 60000000 && $floatBankAccountNumber <= 99999999) ||
            ($floatBankAccountNumber >= 900000000 && $floatBankAccountNumber <= 999999999) ||
            ($floatBankAccountNumber >= 2000000000 && $floatBankAccountNumber <= 2999999999) ||
            ($floatBankAccountNumber >= 7100000000 && $floatBankAccountNumber <= 8499999999) ||
            ($floatBankAccountNumber >= 8600000000 && $floatBankAccountNumber <= 8999999999)) {
            return "";
        }

        return parent::generateIban();
    }
}
