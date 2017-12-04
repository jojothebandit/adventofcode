<?php

namespace degordian\yii\codeception;

use jojothebandit\advent\Day3;
use jojothebandit\advent\Day3Part2;

class Day3Test extends \Codeception\Test\Unit
{
    public function testGenerateMatrix()
    {
        $day = new Day3(100);
        $day->generateMatrix();
        $expected = json_decode('{"0":{"0":1,"1":4,"-1":8,"2":15,"-2":23,"3":34,"-3":46,"4":61,"-4":77,"5":96},"1":{"0":2,"1":3,"-1":9,"2":14,"-2":24,"3":33,"-3":47,"4":60,"-4":78,"5":95},"-1":{"1":5,"0":6,"-1":7,"2":16,"-2":22,"3":35,"-3":45,"4":62,"-4":76,"5":97},"2":{"-1":10,"0":11,"1":12,"2":13,"-2":25,"3":32,"-3":48,"4":59,"-4":79,"5":94},"-2":{"2":17,"1":18,"0":19,"-1":20,"-2":21,"3":36,"-3":44,"4":63,"-4":75,"5":98},"3":{"-2":26,"-1":27,"0":28,"1":29,"2":30,"3":31,"-3":49,"4":58,"-4":80,"5":93},"-3":{"3":37,"2":38,"1":39,"0":40,"-1":41,"-2":42,"-3":43,"4":64,"-4":74,"5":99},"4":{"-3":50,"-2":51,"-1":52,"0":53,"1":54,"2":55,"3":56,"4":57,"-4":81,"5":92},"-4":{"4":65,"3":66,"2":67,"1":68,"0":69,"-1":70,"-2":71,"-3":72,"-4":73,"5":100},"5":{"-4":82,"-3":83,"-2":84,"-1":85,"0":86,"1":87,"2":88,"3":89,"4":90,"5":91},"-5":{"5":101}}', true);
        $matrix = $day->getMatrix();
        $this->assertEquals($expected, $matrix);
    }

    public function testCalculateSteps1()
    {
        $day = new Day3(30);
        $steps = $day->calculateSteps(1);
        $expected = 0;
        $this->assertEquals($expected, $steps);
    }
    public function testCalculateSteps12()
    {
        $day = new Day3(30);
        $steps = $day->calculateSteps(12);
        $expected = 3;
        $this->assertEquals($expected, $steps);
    }
    public function testCalculateSteps23()
    {
        $day = new Day3(30);
        $steps = $day->calculateSteps(23);
        $expected = 2;
        $this->assertEquals($expected, $steps);
    }
    public function testCalculateSteps1024()
    {
        $day = new Day3(1024);
        $steps = $day->calculateSteps(1024);
        $expected = 31;
        $this->assertEquals($expected, $steps);
    }
//    public function testCalculateStepsInput()
//    {
//        $day = new Day3(312051);
//        $steps = $day->calculateSteps(312051);
//        $expected = 430;
//        $this->assertEquals($expected, $steps);
//    }
    public function testCalculateLargerFound1()
    {
        $day = new Day3Part2(10);
        $day->setSearchValue(0);
        $day->generateMatrix();
        $found = $day->getFirstAfterValue();
        $expected = 1;
        $this->assertEquals($expected, $found);
    }
    public function testCalculateLargerFound2()
    {
        $day = new Day3Part2(10);
        $day->setSearchValue(0);
        $day->generateMatrix();
        $found = $day->getFirstAfterValue();
        $expected = 1;
        $this->assertEquals($expected, $found);
    }
    public function testCalculateLargerFound3()
    {
        $day = new Day3Part2(10);
        $day->setSearchValue(1);
        $day->generateMatrix();
        $found = $day->getFirstAfterValue();
        $expected = 1;
        $this->assertEquals($expected, $found);
    }
    public function testCalculateLargerFound4()
    {
        $day = new Day3Part2(10);
        $day->setSearchValue(3);
        $day->generateMatrix();
        $found = $day->getFirstAfterValue();
        $expected = 4;
        $this->assertEquals($expected, $found);
    }
    public function testCalculateLargerFound5()
    {
        $day = new Day3Part2(10);
        $day->setSearchValue(4);
        $day->generateMatrix();
        $found = $day->getFirstAfterValue();
        $expected = 4;
        $this->assertEquals($expected, $found);
    }
    public function testCalculateLargerFoundInput()
    {
        $day = new Day3Part2(500);
        $day->setSearchValue(312051);
        $day->generateMatrix();
        $found = $day->getFirstAfterValue();
        $expected = 312453;
        $this->assertEquals($expected, $found);
    }
    public function testGenerateMatrix2()
    {
        $day = new Day3Part2(100);
        $day->generateMatrix();
        $matrix = $day->getMatrix();
        $expected = json_decode('{"0":{"0":1,"1":4,"-1":23,"2":133,"-2":806,"3":5733,"-3":39835,"4":312453,"-4":2411813,"5":20390510},"1":{"0":1,"1":2,"-1":25,"2":122,"-2":880,"3":5336,"-3":42452,"4":295229,"-4":2539320,"5":19452043},"-1":{"1":5,"0":10,"-1":11,"2":142,"-2":747,"3":6155,"-3":37402,"4":330785,"-4":2292124,"5":21383723},"2":{"-1":26,"0":54,"1":57,"2":59,"-2":931,"3":5022,"-3":45220,"4":279138,"-4":2674100,"5":18565223},"-2":{"2":147,"1":304,"0":330,"-1":351,"-2":362,"3":6444,"-3":35487,"4":349975,"-4":2179400,"5":22427493},"3":{"-2":957,"-1":1968,"0":2105,"1":2275,"2":2391,"3":2450,"-3":47108,"4":266330,"-4":2814493,"5":17724526},"-3":{"3":6591,"2":13486,"1":14267,"0":15252,"-1":16295,"-2":17008,"-3":17370,"4":363010,"-4":2089141,"5":23510079},"4":{"-3":48065,"-2":98098,"-1":103128,"0":109476,"1":116247,"2":123363,"3":128204,"4":130654,"-4":2909666,"5":17048404},"-4":{"4":369601,"3":752688,"2":787032,"1":830037,"0":875851,"-1":924406,"-2":975079,"-3":1009457,"-4":1026827,"5":24242690},"5":{"-4":2957731,"-3":6013560,"-2":6262851,"-1":6573553,"0":6902404,"1":7251490,"2":7619304,"3":8001525,"4":8260383,"5":8391037},"-5":{"5":24612291}}', true);
        $this->assertEquals($expected, $matrix);
    }


}
