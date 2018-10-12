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
class Rule001501 extends Rule000000
{
    public function __construct($localeCode, $instituteIdentification, $bankAccountNumber)
    {
        parent::__construct($localeCode, '37060193', $bankAccountNumber);
    }

    protected function getBankAccountSubstitutions()
    {
        return array(
            "94" => "3008888018"
            , "556" => "101010"
            , "888" => "31870011"
            , "4040" => "4003600101"
            , "5826" => "1015826017"
            , "25000" => "25000110"
            , "393393" => "33013019"
            , "444555" => "32230016"
            , "603060" => "6002919018"
            , "2120041" => "2130041"
            , "80868086" => "4007375013"
            , "400569017" => "4000569017"
        );
    }
}
