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
class Rule004301 extends Rule004300
{
    /*
        Sobald die BLZ 606 510 70 durch die BLZ 666 500 85 ersetzt wurde,
        darf nur noch die Prüfziffernmethode 06 (Methode für BLZ 666 500 85)
        für die Ursprungskontonummer verwendet werden. Führt dies zu einem
        Prüfziffer-Fehler, kann die Kontonummer nicht auf die IBAN umgestellt
        werden. Desweiteren soll für die Bankleitzahl 606 510 70 der
        BIC PZHSDE66XXX zugeordnet werden.
    */
}
