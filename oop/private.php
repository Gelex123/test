<?php
class Test
{
    private $val;

    public function setVal($val)
    {
        $this->val = $val;
    }

    public function getVal()
    {
        return $this->val;
    }
}

$t = new Test;
$t->setVal(22);
