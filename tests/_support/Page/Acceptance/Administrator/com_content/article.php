<?php
namespace Page\Acceptance\Administrator;

class Article extends \AcceptanceTester
{
	public static $url = 'administrator/index.php?option=com_content';

	public static $title = 'Articles: New'; // <= title will be different depending on the open article

	public static $titleLocator = ['class' => 'page-title'];
}
