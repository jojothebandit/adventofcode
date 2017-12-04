<?php

namespace jojothebandit\advent;

use Codeception\Codecept;
use Codeception\Test\Unit;

class Day1Test extends Unit
{
    public function testGetSumFirstPart1Code_122()
    {
        $code = '1122';
        $sum = Day1::getSum($code, 1);
        $expected = 3;
        $this->assertEquals($expected, $sum);
    }

    public function testGetSumFirstPartCode_1111()
    {
        $code = '1111';
        $sum = Day1::getSum($code, 1);
        $expected = 4;
        $this->assertEquals($expected, $sum);
    }
    public function testGetSumFirstPartCode_1234()
    {
        $code = '1234';
        $sum = Day1::getSum($code, 1);
        $expected = 0;
        $this->assertEquals($expected, $sum);
    }
    public function testGetSumFirstPartCode_91212129()
    {
        $code = '91212129';
        $sum = Day1::getSum($code, 1);
        $expected = 9;
        $this->assertEquals($expected, $sum);
    }
    public function testGetSumFirstPartInputFile()
    {

        $code = file_get_contents(codecept_data_dir() . 'inputs/day1.txt');
        $sum = Day1::getSum($code, 1);
        $expected = 1029;
        $this->assertEquals($expected, $sum);
    }
    public function testGetSumSecondPartCode_1212()
    {
        $code = '1212';
        $sum = Day1::getSum($code, 2);
        $expected = 6;
        $this->assertEquals($expected, $sum);
    }
    public function testGetSumSecondPartCode_1221()
    {
        $code = '1221';
        $sum = Day1::getSum($code, 2);
        $expected = 0;
        $this->assertEquals($expected, $sum);
    }
    public function testGetSumSecondPartCode_123425()
    {
        $code = '123425';
        $sum = Day1::getSum($code, 2);
        $expected = 4;
        $this->assertEquals($expected, $sum);
    }
    public function testGetSumSecondPartCode_123123()
    {
        $code = '123123';
        $sum = Day1::getSum($code, 2);
        $expected = 12;
        $this->assertEquals($expected, $sum);
    }
    public function testGetSumSecondPartCode_12131415()
    {
        $code = '12131415';
        $sum = Day1::getSum($code, 2);
        $expected = 4;
        $this->assertEquals($expected, $sum);
    }
}
