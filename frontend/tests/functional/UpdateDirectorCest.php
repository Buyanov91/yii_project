<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class UpdateDirectorCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage('director/update');
        $I->see('Update Directors:', 'h1');
    }

    protected function formParams($name)
    {
        return [
            'Directors[name]' => $name,
        ];
    }

    public function checkEmpty(FunctionalTester $I)
    {
        $I->submitForm('#create-director', $this->formParams(''));
        $I->seeValidationError('Name cannot be blank.');
    }
}
