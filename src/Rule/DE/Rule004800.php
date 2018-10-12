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
class Rule004800 extends Rule000000
{
    protected function getInstituteIdentificationSubstitutions()
    {
        return array(
            "10120800" => "36010200"
            , "27010200" => "36010200"
            , "60020300" => "36010200"
        );
    }
}
