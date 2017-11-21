<?php
class FirstCest 
{
    public function frontpageWorks(AcceptanceTester $I)
    {
        $I->amOnUrl('http://google.com');
        $I->see('Gmail');  
    }
}