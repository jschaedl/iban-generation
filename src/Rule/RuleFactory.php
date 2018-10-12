<?php

/*
 * This file is part of the iban-generation library.
 *
 * (c) Jan Schädlich <mail@janschaedlich.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Iban\Generation\Rule;

use Iban\Generation\Constants;
use IBAN\Rule\Exception\RuleNotImplementedException;

/**
 * @author Jan Schädlich <mail@janschaedlich.de>
 */
class RuleFactory implements RuleFactoryInterface
{
    private $localeCode;

    public function __construct(string $localeCode = 'DE')
    {
        if (!$this->isLocaleCodeValid($localeCode)) {
            throw new \InvalidArgumentException('locale invalid');
        }

        $this->localeCode = $localeCode;
    }

    /**
     * @throws RuleNotImplementedException
     */
    public function create(string $version, string $bankIdentifier, string $accountNumber): RuleInterface
    {
        $filename = 'Rule' . $version . '.php';
        $filepath = __DIR__ . DIRECTORY_SEPARATOR . $this->localeCode . DIRECTORY_SEPARATOR . $filename;


        if (!file_exists($filepath)) {
            throw new RuleNotImplementedException('Rule' . $version);
        }

        $class = '\\Iban\\Generation\\Rule\\' . $this->localeCode . '\\Rule' . $version;

        return new $class($this->localeCode, $bankIdentifier, $accountNumber);
    }
    
    private function isLocaleCodeValid($localeCode)
    {
        if (strlen($localeCode) !== 2) {
            return false;
        }

        if (empty(Constants::$ibanFormatMap[$localeCode])) {
            return false;
        }

        return true;
    }
}
