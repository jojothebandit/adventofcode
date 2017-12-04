<?php


namespace jojothebandit\advent;

class Day2
{
    public static function getChecksumDiff($matrix)
    {
        $checksum = 0;
        $numbers = self::matrixToArray($matrix);
        $lineNum = 1;
        foreach ($numbers as $lines) {
            $lineDiff[$lineNum] = max($lines) - min($lines);
            $checksum +=  $lineDiff[$lineNum];
            $lineNum++;
        }

        return $checksum;
    }

    public static function getChecksumDivisible($matrix)
    {
        $numbers = self::matrixToArray($matrix);
        $found = [];
        for ($row = 0; $row < count($numbers); $row++) {
            for ($element = 0; $element < count($numbers[$row]); $element++) {
                rsort($numbers[$row]);
                $divideDivisible = self::getDivisibleNumber($numbers[$row][$element], $numbers[$row]);
                if ($divideDivisible) {
                    $found[$row] = $divideDivisible;
                    continue;
                }
            }
        }

        $checksum = array_sum($found);
        return $checksum;
    }

    protected static function getDivisibleNumber($one, $row)
    {
        sort($row);

        foreach ($row as $number) {
            if ($number != $one && $one % $number === 0) {
                return $one / $number;
            }
        }

        return false;
    }

    protected static function matrixToArray($matrix)
    {
        $numbers = [];
        $lines  = explode(PHP_EOL, trim($matrix));

        foreach ($lines as $line) {
            $numbers[] = preg_split('/\s/', $line, -1, PREG_SPLIT_NO_EMPTY);
        }

        return $numbers;
    }
}
