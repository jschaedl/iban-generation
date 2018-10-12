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

/**
 * @author Jan Schädlich <mail@janschaedlich.de>
 */
interface RuleFactoryInterface
{
    public function create(string $version, string $bankIdentifier, string $accountNumber): RuleInterface;
}
