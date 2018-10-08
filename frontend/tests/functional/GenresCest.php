<?php

namespace frontend\tests\functional;

use frontend\tests\FunctionalTester;

/* @var $scenario \Codeception\Scenario */
class GenresCest
{
    public function checkGenres(FunctionalTester $I)
    {
        $I->amOnPage('genre/index');
        $I->see('Genres', 'h1');
    }
}
