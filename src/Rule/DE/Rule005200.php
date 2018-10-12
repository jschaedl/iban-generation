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
class Rule005200 extends Rule000000
{
    public function __construct($localeCode, $instituteIdentification, $bankAccountNumber)
    {
        $replacements = array(
            "67220020#5308810004" => "60050101#0002662604"
            , "67220020#5308810000" => "60050101#0002659600"
            , "67020020#5203145700" => "60050101#7496510994"
            , "69421020#6208908100" => "60050101#7481501341"
            , "66620020#4840404000" => "60050101#7498502663"
            , "64120030#1201200100" => "60050101#7477501214"
            , "64020030#1408050100" => "60050101#7469534505"
            , "63020130#1112156300" => "60050101#0004475655"
            , "62030050#7002703200" => "60050101#7406501175"
            , "69220020#6402145400" => "60050101#7485500252"
        );

        if (isset($replacements[$instituteIdentification . "#" . $bankAccountNumber])) {
            $replacement = $replacements[$instituteIdentification . "#" . $bankAccountNumber];
            $explodedData = explode('#', $replacement);
            $instituteIdentification = $explodedData[0];
            $bankAccountNumber = $explodedData[1];

            parent::__construct($localeCode, $instituteIdentification, $bankAccountNumber);
        } else {
            throw new \Exception('no iban generation');
        }
    }
}
