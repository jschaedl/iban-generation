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

use Iban\Generation\Bundesbank\Registry;
use Iban\Generation\Rule\RuleFactory;

/**
 * @author Jan Schädlich <mail@janschaedlich.de>
 */
class GeneratorDE extends Generator
{
    protected $registry;

    public function __construct()
    {
        parent::__construct(new RuleFactory('DE'));

        $this->registry = new Registry();
    }

    public function generate(string $bankIdentifier, string $accountNumber)
    {
        $bankIdentifier = $this->normalize($bankIdentifier);
        $accountNumber = $this->normalize($accountNumber);

        $rule = $this->registry->getIbanRule($bankIdentifier);

        return $this
            ->ruleFactory
            ->create($rule, $bankIdentifier, $accountNumber)
            ->generateIban();
    }
}
