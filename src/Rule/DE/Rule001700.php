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
class Rule001700 extends Rule000000
{
    protected function getBankAccountSubstitutions()
    {
        return array(
            "100" => "2009090013"
            , "111" => "2111111017"
            , "240" => "2100240010"
            , "4004" => "2204004016"
            , "4444" => "2044444014"
            , "6060" => "2016060014"
            , "102030" => "1102030016"
            , "333333" => "2033333016"
            , "909090" => "2009090013"
            , "50005000" => "5000500013"
        );
    }
}
