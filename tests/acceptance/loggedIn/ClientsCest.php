<?php
namespace loggedIn;
use \AcceptanceTester;
use Exception;

class ClientsCest
{
    private $clientId;
    private $clientName = 'Codeception Client';

    /**
     * @param AcceptanceTester $I
     */
    public function _before(AcceptanceTester $I)
    {
        $I->amOnPage('/general/login.php');
        $I->fillField(['name' => 'usernameForm'], 'admin');
        $I->fillField(['name' => 'passwordForm'], 'phpcollab');
        $I->click('input[type="submit"]');
    }


    /**
     * @param AcceptanceTester $I
     */
    public function _after(AcceptanceTester $I)
    {
    }

    /**
     * @param AcceptanceTester $I
     */
    public function clientList(AcceptanceTester $I)
    {
        $I->wantTo('See a list of Clients (empty or populated)');
        $I->amOnPage('/clients/listclients.php');
        $I->seeInTitle('List Clients');
        try {
            $I->seeElement('.noItemsFound');
        } catch (Exception $exception) {
            $I->seeElement('.listing');
        }
    }

    /**
     * @param AcceptanceTester $I
     * @depends clientList
     */
    public function addClient(AcceptanceTester $I)
    {
        $I->wantTo('Add new Client');
        $I->amOnPage('/clients/addclient.php');
        $I->seeInTitle('Add Client');
        $I->see('Add Client Organization', '.heading');
        $I->see('Add Client', ['css' => '.heading']);
        $I->submitForm('form', [
            'name' => $this->clientName,
            'address'  => '123 Nowhere',
            'phone' => '5551212',
            'url' => 'codeception.com',
            'email' => 'Test@example.com',
            'comments' => 'Client created with acceptance tests',
            'hourly_rate' => '100'
        ]);
        $I->dontSeeElement('.headingError');
        $I->dontSeeElement('.error');
        $I->see('Success : Addition succeeded', ['css' => '.message']);
        $I->see($this->clientName, ".//tr/td[contains(text(),'Name')]/following-sibling::td");
        $this->clientId = $I->grabFromCurrentUrl('~id=(\d+)~');
    }

    /**
     * @param AcceptanceTester $I
     * @depends addClient
     */
    public function listClients(AcceptanceTester $I)
    {
        $I->wantTo('See a list of Clients');
        $I->amOnPage('/clients/listclients.php');
        $I->seeInTitle('List Clients');
        $I->seeElement('.listing');
        $I->see($this->clientName, ['css' => '.listing']);
    }

    /**
     * @param AcceptanceTester $I
     * @depends addClient
     */
    public function viewClient(AcceptanceTester $I)
    {
        $I->wantTo('View details about a client');
        $I->amOnPage('/clients/listclients.php');
        $I->seeInTitle('List Clients');
        $I->amGoingTo('select the first client in the list and navigate to it');
        $I->dontSeeElement('.noItemsFound');
        $I->click('//a[text()="' . $this->clientName . '"]');
        $I->seeElement('.content');
        $I->see($this->clientName, ".//tr/td[contains(text(),'Name')]/following-sibling::td");
    }

    /**
     * @param AcceptanceTester $I
     * @depends viewClient
     */
    public function editClient(AcceptanceTester $I)
    {
        $I->wantTo('Edit Client');
        $I->amOnPage('/clients/editclient.php?id=' . $this->clientId);
        $I->seeInTitle('Edit Client (' . $this->clientName . ')');
        $I->see('Edit Client Organization', '.heading');
        $I->submitForm('form', [
            'name' => $this->clientName . ' - edit',
        ]);
        $I->dontSeeElement('.headingError');
        $I->dontSeeElement('.error');
        $I->see('Success : Modification succeeded', ['css' => '.message']);
        $I->see($this->clientName . ' - edit', ".//tr/td[contains(text(),'Name')]/following-sibling::td");
    }

    /**
     * @param AcceptanceTester $I
     * @depends editClient
     */
    public function deleteClient(AcceptanceTester $I)
    {
        $I->wantTo('Delete Client: ' . $this->clientName);
        $I->amOnPage('/clients/deleteclients.php?id=' . $this->clientId);
        $I->seeInTitle('Delete Client');
        $I->see('Delete Client Organizations', '.heading');
        $I->see($this->clientName . ' - edit', ['css' => '.content']);
        $I->see($this->clientName . ' - edit', ".//tr/td[contains(text(),'#". $this->clientId . "')]/following-sibling::td");

        $I->click('form button[type=submit]');
        $I->seeInCurrentUrl('/clients/listclients.php?msg=delete');
        $I->see('Success : Deletion succeeded', ['css' => '.message']);
        $I->dontSeeLink($this->clientName . ' - edit');
    }
}
