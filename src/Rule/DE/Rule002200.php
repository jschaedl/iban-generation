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
class Rule002200 extends Rule000000
{
    protected function getBankAccountSubstitutions()
    {
        return array(
            "1111111" => "2222200000"
        );
    }
}