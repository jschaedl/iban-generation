<?php

/*
 * This file is part of the iban-generation library.
 *
 * (c) Jan Schädlich <mail@janschaedlich.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Iban\Generation;

use Iban\Generation\Rule\RuleFactory;
use Iban\Generation\Rule\RuleFactoryInterface;

/**
 * @author Jan Schädlich <mail@janschaedlich.de>
 */
class Generator
{
    protected $ruleFactory;
    
    public function __construct(RuleFactoryInterface $ruleFactory = null)
    {
        $this->ruleFactory = $ruleFactory;

        if (null === $ruleFactory) {
            $this->ruleFactory =  new RuleFactory('DE');
        }
    }

    /**
     * @throws \IBAN\Rule\Exception\RuleNotImplementedException
     */
    public function generate(string $bankIdentifier, string $accountNumber)
    {
        $bankIdentifier = $this->normalize($bankIdentifier);
        $accountNumber = $this->normalize($accountNumber);
        
        return $this
            ->ruleFactory
            ->create('000000', $bankIdentifier, $accountNumber)
            ->generateIban();
    }

    protected function normalize($value)
    {
        $value = trim($value);
        $value = ltrim($value, '0');
        $value = preg_replace('/\s+/', '', $value);

        return $value;
    }
}
