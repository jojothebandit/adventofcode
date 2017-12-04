<?php


namespace jojothebandit\advent;

class Day1
{
    public static function getSum($code, $part)
    {
        $numbers = preg_split('//', $code, -1, PREG_SPLIT_NO_EMPTY);
        $cNum = count($numbers);
        $sum = 0;
        $step = $part == 1 ? 1: $cNum/2;

        for ($i = 0; $i < $cNum; $i++) {
            $toCompareKey = ($i + $step) % $cNum;
            $sum += (($numbers[$i] - $numbers[$toCompareKey]) === 0) * $numbers[$toCompareKey];
        }

        return $sum;
    }
}
