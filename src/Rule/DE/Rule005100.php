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
class Rule005100 extends Rule000000
{
    protected function getBankAccountSubstitutions()
    {
        return array(
            "333" => "7832500881"
            , "502" => "1108884"
            , "500500500" => "5005000"
            , "502502502" => "1108884"
        );
    }
}
