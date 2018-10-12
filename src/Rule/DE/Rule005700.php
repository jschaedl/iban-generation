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
class Rule005700 extends Rule000000
{
    public function __construct($localeCode, $instituteIdentification, $bankAccountNumber)
    {
        if ($instituteIdentification == '50810900') {
            $instituteIdentification = '66010200';
        }
        parent::__construct($localeCode, $instituteIdentification, $bankAccountNumber);
    }
}
