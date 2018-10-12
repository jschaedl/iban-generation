<?php

/*
 * This file is part of the iban-validation library.
 *
 * (c) Jan Schädlich <mail@janschaedlich.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Iban\Generation\Bundesbank;

/**
 * @author Jan Schädlich <mail@janschaedlich.de>
 */
class Registry
{
    /**
     * @var array
     */
    protected $registry;

    /**
     * @param RegistryLoader $registryLoader
     */
    public function __construct($registryLoader = null)
    {
        if (null === $registryLoader) {
            $registryLoader = new RegistryLoader(__DIR__ . '/BLZ2_20140303.yaml');
        }

        $this->registry = $registryLoader->load();
    }

    public function isBankIdentifierAvailable(string $bankIdentifier): bool
    {
        return array_key_exists($bankIdentifier, $this->registry);
    }

    public function getIbanRule(string $bankIdentifier)
    {
        return strval($this->registry[$bankIdentifier]['iban_rule']);
    }
}
