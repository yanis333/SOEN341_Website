<?php


class FirstCest
{

public function frontpageWorks(AcceptanceTester $I){
    $I->amOnPage('/index.php');
    $I->see('Questions');
    $I->click('Login');
    $I->click('Register');
    $I->click('Ask a question');
    $I->click('Search a question');
    $I->click('Report user');
}
    public function _before(AcceptanceTester $I)
    {
    }

    public function _after(AcceptanceTester $I)
    {
    }

    // tests
    public function tryToTest(AcceptanceTester $I)
    {
    }
}
