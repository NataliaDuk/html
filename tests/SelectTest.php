<?php

use PHPUnit\Framework\TestCase;
use W1020\HTML\Select;

class SelectTest extends TestCase
{
    public function testSel()
    {
        $sel = new Select();
        $html = "<select name=''></select>";
        $this->assertEquals($html, $sel->html());
        $html = "<select name=''><option value='1' >Ivanow</option><option value='2' >Petrow</option><option value='3' >Sidorow</option></select>";
        $this->assertEquals($html, $sel->setData([1 => 'Ivanow', 2 => 'Petrow', 3 => 'Sidorow'])->html());
    }
}