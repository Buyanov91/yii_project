<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

/* @var $scenario \Codeception\Scenario */
class DirectorsCest
{
    public function checkDirectors(FunctionalTester $I)
    {
        $I->amOnPage('director/index');
        $I->see('Directors', 'h1');
    }
}
