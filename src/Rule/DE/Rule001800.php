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
class Rule001800 extends Rule000000
{
    protected function getBankAccountSubstitutions()
    {
        return array(
            "556" => "120440110"
            , "5435435430" => "543543543"
            , "2157" => "121787016"
            , "9800" => "120800019"
            , "202050" => "1221864014"
        );
    }
}
