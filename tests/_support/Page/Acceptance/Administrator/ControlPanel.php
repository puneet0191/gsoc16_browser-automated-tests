<?php
namespace Page\Acceptance\Administrator;

class ControlPanel extends \AcceptanceTester
{
	public static $url = 'administrator/index.php';

	public static $title = 'Control Panel';

	public static $titleLocator = ['class' => 'page-title'];
}
