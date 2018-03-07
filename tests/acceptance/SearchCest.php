<?php


class SearchCest
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
        $I->amOnPage('/LIST.php');
        $I->see('Enter Search term:');
        $I->click('Ask a question');
        $I->click('Search a question');
  
    }
}
