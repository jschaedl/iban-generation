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
class Rule003800 extends Rule000000
{
    protected function getInstituteIdentificationSubstitutions()
    {
        return array(
            "26691213" => "28590075"
            , "28591579" => "28590075"
            , "25090300" => "28590075"
        );
    }
}
