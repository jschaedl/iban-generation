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
class Rule002400 extends Rule000000
{
    protected function getBankAccountSubstitutions()
    {
        return array(
            "94" => "1694"
            , "248" => "17248"
            , "345" => "17345"
            , "400" => "14400"
        );
    }
}