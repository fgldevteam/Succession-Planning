<?php
$I = new WebGuy($scenario);
$I->wantTo('verify the title on the users page');
$I->amOnPage('/users');
$I->see('hello world', 'h1');