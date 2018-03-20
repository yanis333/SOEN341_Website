<?php


class profileCest
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
        $I->amOnPage('/profil.php');
        $I->see('Question asked');
        $I->see('Question Replied');
        $I->click(['id' => 'graphinfo']);
        $I->click(['id' => 'passwordchange']);
       
    }
}
