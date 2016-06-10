<?php
namespace Page\Acceptance\Administrator;

class Articles extends \AcceptanceTester
{
	public static $url = 'administrator/index.php?option=com_content';

	public static $title = 'Articles';

	public static $titleLocator = ['class' => 'page-title'];
}
