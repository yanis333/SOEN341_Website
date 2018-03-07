<?php


class addCest
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
        $I->amOnPage('http://localhost/soen341_website/view//add.php');
        $I->see('Title');
        $I->see('klklklkl');
        $I->see('Description');
        $I->see('Tags');
        $I->click('Post your question');
        $I->click('Ask a question');
        $I->click('Search a question');
    }
}
