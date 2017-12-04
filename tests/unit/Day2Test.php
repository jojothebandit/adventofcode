<?php

namespace jojothebandit\advent;


use Codeception\Test\Unit;

class Day2Test extends Unit
{
    public function testGetChecksumFirstPart_example()
    {

        $matrix = '5 1 9 5
                   7 5 3
                   2 4 6 8';

        $checksum = Day2::getChecksumDiff($matrix);
        $expected = 18;
        $this->assertEquals($expected, $checksum);
    }

    public function testGetChecksumFirstPart_exampleMine()
    {

        $matrix = '53 122 9333 511
                   733 54 311
                   222 43 644 823';

        $checksum = Day2::getChecksumDiff($matrix);
        $expected = 10739;
        $this->assertEquals($expected, $checksum);
    }
    public function testGetChecksumFirstPart_InputFile()
    {
        $matrix = file_get_contents(codecept_data_dir() . 'inputs/day2.txt');

        $sum = Day2::getChecksumDiff($matrix);
        $expected = 41919;
        $this->assertEquals($expected, $sum);
    }

    public function testGetChecksumSecondPartExample()
    {

        $matrix = '5 9 2 8
                   9 4 7 3
                   3 8 6 5';


        $sum = Day2::getChecksumDivisible($matrix);
        $expected = 9;
        $this->assertEquals($expected, $sum);
    }
    public function testGetChecksumSecondPartInputFile()
    {
        $matrix = file_get_contents(codecept_data_dir() . 'inputs/day2.txt');

        $sum = Day2::getChecksumDivisible($matrix);
        $expected = 303;
        $this->assertEquals($expected, $sum);
    }


}
