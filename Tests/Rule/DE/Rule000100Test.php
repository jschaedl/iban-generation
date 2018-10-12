<?php

declare(strict_types=1);

namespace Iban\Generation\Tests\Rule\DE;

use Iban\Generation\Rule\DE\Rule000100;
use PHPUnit\Framework\TestCase;

/**
 * @author Jan Schädlich <mail@janschaedlich.de>
 */
class Rule000100Test extends TestCase
{
    /**
     * @expectedException \Exception
     */
    public function testItShouldThrowException()
    {
        (new Rule000100('', '', ''))->generateIban();
    }
}
