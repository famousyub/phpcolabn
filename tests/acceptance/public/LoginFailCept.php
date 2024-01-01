<?php
$I = new AcceptanceTester($scenario);
$I->wantTo('login');
$I->amOnPage('/general/login.php');
$I->fillField(['name' => 'usernameForm'], 'testUser');
$I->fillField(['name' => 'passwordForm'], 'invalidpassword');
$I->click('input[type="submit"]');
$I->seeElement('.headingError');
