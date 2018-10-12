<?php

/*
 * This file is part of the iban-validation library.
 *
 * (c) Jan Schädlich <mail@janschaedlich.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

/**
 * This script reads the data from the blz2_.csv provided by Bundesbank and converts it into a yaml structure.
 *
 * @author Jan Schädlich <mail@janschaedlich.de>
 */

$usage = "php iban.php BLZ2_20140303.csv > Bundesbank/BLZ2_20140303.yaml";

if (2 !== $argc) {
    echo 'Please provide path to BLZ2_* file provided by Bundesbank!' . PHP_EOL;
    echo 'Use: ' . $usage . PHP_EOL;
    exit(1);
}

$filename = __DIR__ . '/' . $argv[1];

if (!file_exists($filename)) {
    echo sprintf('Given file (%s) does not exist!', $filename) . PHP_EOL;
    exit(1);
}


require_once __DIR__ . '/vendor/autoload.php';

use Symfony\Component\Yaml\Yaml;

$registry = [];
$lines = file($filename);

foreach ($lines as $lineNumber => $line) {
    if (0 === $lineNumber) {
        continue;
    }

    $data = explode(';', $line);

    $registry[trim($data[0])] = [
        'bank_name' => trim($data[2]),
        'pocode' => trim($data[3]),
        'city' => trim($data[4]),
        'shortname' => trim($data[5]),
        'pan' => trim($data[6]),
        'bic' => trim($data[7]),
        'check_digit' => trim($data[8]),
        'iban_rule' => trim($data[count($data) - 1]),
    ];
}

echo(Yaml::dump($registry));

exit(0);
