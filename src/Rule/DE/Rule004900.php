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
class Rule004900 extends Rule000000
{
    protected $bankAccountSubstitutions = array(
        "36" => "2310113"
        , "936" => "2310113"
        , "999" => "1310113"
        , "6060" => "160602"
    );

    public function generateIban()
    {
        if ($this->instituteIdentificationEquals('30060010') ||
            $this->instituteIdentificationEquals('40060000') ||
            $this->instituteIdentificationEquals('57060000')) {
            $this->bankAccountNumber = str_pad($this->bankAccountNumber, $this->getBankAccountNumberLength(), '0', STR_PAD_LEFT);
            if (substr($this->bankAccountNumber, 4, 1) == '9') {
                $this->bankAccountNumber = substr($this->bankAccountNumber, 4) . substr($this->bankAccountNumber, 0, 4);
            }
        }

        return parent::generateIban();
    }
}
