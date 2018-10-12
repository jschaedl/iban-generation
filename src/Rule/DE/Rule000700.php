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
class Rule000700 extends Rule000000
{
    protected function getBankAccountSubstitutions()
    {
        return array(
              "111" => "1115"
            , "221" => "23002157"
            , "1888" => "18882068"
            , "2006" => "1900668508"
            , "2626" => "1900730100"
            , "3004" => "1900637016"
            , "3636" => "23002447"
            , "4000" => "4028"
            , "4444" => "17368"
            , "5050" => "73999"
            , "8888" => "1901335750"
            , "30000" => "9992959"
            , "43430" => "1901693331"
            , "46664" => "1900399856"
            , "55555" => "34407379"
            , "102030" => "1900480466"
            , "151515" => "57762957"
            , "222222" => "2222222"
            , "300000" => "9992959"
            , "333333" => "33217"
            , "414141" => "92817"
            , "606060" => "91025"
            , "909090" => "90944"
            , "2602024" => "5602024"
            , "3000000" => "9992959"
            , "7777777" => "2222222"
            , "8090100" => "38901"
            , "14141414" => "43597665"
            , "15000023" => "15002223"
            , "15151515" => "57762957"
            , "22222222" => "2222222"
            , "200820082" => "1901783868"
            , "222220022" => "2222222"
        );
    }
}
