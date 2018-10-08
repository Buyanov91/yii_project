<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

/* @var $scenario \Codeception\Scenario */
class FilmsCest
{
    public function checkFilms(FunctionalTester $I)
    {
        $I->amOnPage('/');
        $I->see('Films', 'h1');
    }
}
