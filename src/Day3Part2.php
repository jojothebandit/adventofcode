<?php


namespace jojothebandit\advent;

class Day3Part2 extends Day3
{

    protected $firstAfterValue = null;
    protected $searchForValue;


    public function setSearchValue($searchValue)
    {
        $this->searchForValue = $searchValue;
    }

    public function getFirstAfterValue()
    {
        return $this->firstAfterValue;
    }

    protected function getSquareValue()
    {
        $value = 0;
        foreach ($this->getAdjacentValues() as $adjacentValue) {
            $value += $adjacentValue;
        }

        if ($this->hasReachedValue($value)) {
            $this->firstAfterValue = $value;
        }
        return $value;
    }

    protected function getAdjacentValues()
    {
        $valueArray = [];
        for ($lr = -1; $lr <= 1; ++$lr) {
            for ($ud = 1; $ud  >= -1; --$ud) {
                if (isset($this->matrix[$this->positionX + $lr][$this->positionY + $ud])) {
                    $valueArray[] = $this->matrix[$this->positionX + $lr][$this->positionY + $ud];
                }
            }
        }
        return $valueArray;
    }

    protected function hasReachedValue($value)
    {
        return ($this->firstAfterValue === null && $value >= $this->searchForValue);
    }
}
