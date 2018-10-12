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
class Rule001001 extends Rule000000
{
    protected function getInstituteIdentificationSubstitutions()
    {
        return  array(
            "50050222" => "50050201"
        );
    }

    public function generateIban()
    {
        if ($this->instituteIdentificationEquals('50050201') && $this->bankAccountNumberEquals('2000')) {
            return 'DE42500502010000222000';
        } elseif ($this->instituteIdentificationEquals('50050201') && $this->bankAccountNumberEquals('800000')) {
            return 'DE89500502010000180802';
        } else {
            return parent::generateIban();
        }
    }
}
