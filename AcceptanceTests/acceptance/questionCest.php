<?php


class questionCest
{
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
        $I->amOnPage('/question.php');
        $I->see('Description');
        $I->see('Related Questions');
        $I-> see('By');
        $I->see('Reply');
       
    }
}
