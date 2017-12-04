<?php


namespace jojothebandit\advent;

class Day3
{
    protected $matrixSize = 1;

    protected $matrix = [
        0 => [
            0 => 1
        ]
    ];
    protected $direction;

    protected $positionX = 0;
    protected $positionY = 0;
    protected $number = 1;


    const LEFT = 'left';
    const RIGHT = 'right';
    const UP = 'up';
    const DOWN = 'down';

    public function __construct($size)
    {
        $this->matrixSize = $size;
    }

    public function getMatrix()
    {
        return $this->matrix;
    }
    public function generateMatrix()
    {
        for ($n = 1; $n <= $this->matrixSize; $n++) {
            $this->direction = $this->getDirection();
            $this->step();
        }
    }

    protected function step()
    {

        switch ($this->direction) {
            case self::RIGHT : ++$this->positionX;
            break;
            case self::UP :  ++$this->positionY;
            break;
            case self::LEFT : --$this->positionX;
            break;
            case self::DOWN : --$this->positionY;
            break;
        }

        $this->matrix[$this->positionX][$this->positionY] = $this->getSquareValue();
    }

    protected function getSquareValue()
    {
        return ++$this->number;
    }

    protected function getDirection()
    {
        if ($this->positionX == 0 && $this->positionY == 0) {
            return self::RIGHT;
        }

        if ($this->direction == self::RIGHT
            &&
            (!isset($this->matrix[$this->positionX][$this->positionY + 1]))) {
            return self::UP;
        }
        if ($this->direction == self::UP
            &&
            (!isset($this->matrix[$this->positionX -1][$this->positionY]))) {
            return self::LEFT;
        }
        if ($this->direction == self::LEFT
            &&
            (!isset($this->matrix[$this->positionX][$this->positionY -1]))) {
            return self::DOWN;
        }
        if ($this->direction == self::DOWN
            &&
            (!isset($this->matrix[$this->positionX + 1][$this->positionY]))) {
            return self::RIGHT;
        }


        return $this->direction;
    }

    public function getCoordinatesForNumber($number)
    {
        foreach ($this->matrix as $x => $xLine) {
            foreach ($xLine as $y => $actualNumber) {
                if ($actualNumber == $number) {
                    return [
                        'x' => $x,
                        'y' => $y,
                    ];
                }
            }
        }
    }

    public function calculateSteps($from, $to = 1)
    {
        $this->generateMatrix();
        $coordinates = $this->getCoordinatesForNumber($from);
        $result = abs($coordinates['x']) + abs($coordinates['y']);

        return $result;
    }
}
