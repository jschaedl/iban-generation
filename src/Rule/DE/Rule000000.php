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

use Iban\Generation\Rule\AbstractRule;

/**
 * @author Jan Schädlich <mail@janschaedlich.de>
 */
class Rule000000 extends AbstractRule
{
    protected function getInstituteIdentificationLength()
    {
        return 8;
    }

    protected function getBankAccountNumberLength()
    {
        return 10;
    }
}
