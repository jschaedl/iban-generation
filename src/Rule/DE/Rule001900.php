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
class Rule001900 extends Rule000000
{
    public function generateIban()
    {
        if ($this->instituteIdentificationEquals('50130100') ||
            $this->instituteIdentificationEquals('50220200') ||
            $this->instituteIdentificationEquals('70030800')) {
            $this->instituteIdentification = '50120383';
        }

        return parent::generateIban();
    }
}
