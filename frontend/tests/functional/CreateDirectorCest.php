<?php namespace frontend\tests\functional;
use frontend\tests\FunctionalTester;

class CreateDirectorCest
{
    public function _before(FunctionalTester $I)
    {
        $I->amOnPage('director/create');
        $I->see('Create Directors', 'h1');
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

    public function checkValidName(FunctionalTester $I)
    {
        $I->submitForm('#create-director', $this->formParams('Джексон'));
        $I->see('Джексон', 'h1');
        $I->see('Джексон', 'td');
        $I->see('Delete', 'a');
        $I->see('Update', 'a');
    }


}
