<?php
namespace Step\Acceptance\Administrator;

class Content extends \AcceptanceTester
{
	/**
	 * @When I visit articles page
	 */
	public function iVisitArticlesPage()
	{
		$I = $this;
		$I->waitForElement(\Page\Acceptance\Administrator\com_content\Articles::$titleLocator);
		$I->see(\Page\Acceptance\Administrator\ControlPanel::$title, \Page\Acceptance\Administrator\ControlPanel::$titleLocator);
		$I->seeCurrentUrlEquals(\Page\Acceptance\Administrator\ControlPanel::$url);	}

	/**
	 * @When I create a new article
	 */
	public function iCreateANewArticle()
	{
		$I = $this;
		throw new \Codeception\Exception\Incomplete("Step `I create a new article` is not defined");
	}

	/**
	 * @When I fill mandatory fields for creating an article
	 */
	public function iFillMandatoryFieldsForCreatingAnArticle()
	{
		$I = $this;
	}

	/**
	 * @When I save the new article
	 */
	public function iSaveTheNewArticle()
	{
		$I = $this;
	}

	/**
	 * @Then the article should be created
	 */
	public function theArticleShouldBeCreated()
	{
		$I = $this;
	}

	/**
	 * @Given I am Logged in into Joomla administrator
	 */
	public function iAmLoggedInIntoJoomlaAdministrator()
	{
		$I = $this;
	}

	/**
	 * @Given I am at administrator Control Panel
	 */
	public function iAmAtAdministratorControlPanel()
	{
		$I = $this;
		$I->waitForElement(\Page\Acceptance\Administrator\ControlPanel::$titleLocator);
		$I->see(\Page\Acceptance\Administrator\ControlPanel::$title, \Page\Acceptance\Administrator\ControlPanel::$titleLocator);
		$I->seeCurrentUrlEquals(\Page\Acceptance\Administrator\ControlPanel::$url);
	}
}