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
class Rule000400 extends Rule000000
{
    protected function getBankAccountSubstitutions()
    {
        return array(
              "135" => "990021440"
            , "1111" => "6600012020"
            , "1900" => "920019005"
            , "7878" => "780008006"
            , "8888" => "250030942"
            , "9595" => "1653524703"
            , "97097" => "13044150"
            , "112233" => "630025819"
            , "336666" => "6604058903"
            , "484848" => "920018963"
        );
    }
}
