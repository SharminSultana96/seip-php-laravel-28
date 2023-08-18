<?php


namespace app\classes;


class GradePoint
{
    public $num;
public function index()
    {
        $this->num = 100;

        if($this->num >= 90)
        {
            echo "<h2>A+</h2>";
        }
        elseif ($this->num >= 80)
        {
            echo "<h2>A</h2>";
        }
        elseif ($this->num >= 70)
        {
            echo "<h2>A-</h2>";
        }
        else
        {
            echo "FAIL";
        }

    }
}