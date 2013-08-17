<?php
$I = new WebGuy($scenario);
$I->wantTo('sign in to see my home page');
$I->amOnPage('/signin');
$I->see('Please sign in');
$I->fillField('username', 'ac');
$I->fillField('password', 'ac');
$I->click('Sign In');
$I->seeInCurrentUrl('/home');
$I->see('Home');
$I->see('Lawrence Muchemi');
$I->see('Sign Out');